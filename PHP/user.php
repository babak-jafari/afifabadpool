<?php
require_once 'db.php';
require_once 'message.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

class users extends DB {
    protected $table = 'users';

    public function insert($data) {
        try {
            $query = "INSERT INTO {$this->table} (email_or_phone, password, is_active, is_admin) VALUES (:email_or_phone, :password, :is_active, :is_admin)";
            $stmt = $this->pdo->prepare($query);
            return $stmt->execute([
                'email_or_phone' => $data['email_or_phone'],
                'password' => password_hash($data['password'], PASSWORD_DEFAULT),
                'is_active' => $data['is_active'],
                'is_admin' => $data['is_admin']
            ]);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return false;
        }
    }

    public function exists($email_or_phone) {
        $query = "SELECT COUNT(*) FROM {$this->table} WHERE email_or_phone = :email_or_phone";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(['email_or_phone' => $email_or_phone]);
        return $stmt->fetchColumn() > 0;
    }
}

function processRegistration($email_or_phone, $password) {
    $message = new ErrorMessage();

    if (!$email_or_phone || (strlen($email_or_phone) != 11 && !filter_var($email_or_phone, FILTER_VALIDATE_EMAIL))) {
        $message->set("contact", "❌ شماره تماس یا ایمیل معتبر نیست.");
    } elseif (strlen($password) < 6) {
        $message->set("contact", "❌ پسورد باید حداقل 6 کاراکتر باشد.");
    } else {
        $users = new users(); // اصلاح نام کلاس از NewsLetters به users
        if ($users->exists($email_or_phone)) {
            $message->set("contact", "❌ این شماره یا ایمیل قبلاً ثبت شده است.");
        } else {
            $result = $users->insert([
                'email_or_phone' => $email_or_phone,
                'password' => $password,
                'is_active' => 1,
                'is_admin' => 0
            ]);
            if ($result) {
                $message->set("contact", "✅ عضویت با موفقیت انجام شد!");
            } else {
                $message->set("contact", "❌ خطا در ثبت‌نام!");
            }
        }
    }

    $_SESSION['message'] = $message->first('contact');
}

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email_or_phone = $_POST['email_or_phone'] ?? null;
    $password = $_POST['password'] ?? null;
    processRegistration($email_or_phone, $password);
    header("Location: ../index.php");
    exit;
}
?>