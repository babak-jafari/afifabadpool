<?php
session_start();

require_once 'db.php';
require_once 'message.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// کلاس لاگین از کلاس اصلی دیتابیس ارث‌بری می‌کنه
class Login extends DB {
    protected $table = 'users';

    public function find($data) {
        try {
            $query = "SELECT * FROM {$this->table} WHERE email_or_phone = :email_or_phone";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute(['email_or_phone' => $data['email_or_phone']]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            if ($user && password_verify($data['password'], $user['password'])) {
                return $user; // کاربر پیدا شد و رمز عبور درسته
            }
            return false;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage(); // فقط برای دیباگ
            return false;
        }
    }
}

// تابع پردازش لاگین
function processLogin($email_or_phone, $password) {
    $message = new ErrorMessage();

    if (empty($email_or_phone)) {
        $message->set("contact", "❌ شماره تماس یا ایمیل را وارد کنید.");
    } elseif (empty($password)) {
        $message->set("contact", "❌ رمز عبور را وارد کنید.");
    } else {
        $isPhone = preg_match('/^09[0-9]{9}$/', $email_or_phone);
        $isEmail = filter_var($email_or_phone, FILTER_VALIDATE_EMAIL);

        if (!$isPhone && !$isEmail) {
            $message->set("contact", "❌ شماره تماس (با شروع 09) یا ایمیل معتبر وارد کنید.");
        } elseif (strlen($password) < 6) {
            $message->set("contact", "❌ رمز عبور باید حداقل ۶ کاراکتر باشد.");
        } else {
            $login = new Login();
            $user = $login->find([
                'email_or_phone' => $email_or_phone,
                'password' => $password
            ]);

            if ($user) {
                $_SESSION['user'] = $user;
                $welcomeName = $user['name'] ?? $email_or_phone;
                $message->set("contact", "✅ خوش آمدید، {$welcomeName}!");
            } else {
                $message->set("contact", "❌ ایمیل/شماره یا رمز عبور اشتباه است.");
            }
        }
    }

    $_SESSION['message'] = $message->first('contact');
}

// اگر فرم ارسال شد
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email_or_phone = $_POST['email_or_phone'] ?? null;
    $password = $_POST['password'] ?? null;

    processLogin($email_or_phone, $password);

    header("Location: ../index.php");
    exit;
}

// اگر مستقیماً به این فایل دسترسی داشت
header("Location: ../index.php");
exit;
