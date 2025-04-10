<?php
require_once 'db.php';
require_once 'message.php';  // اضافه کردن کلاس پیام

// کلاس ثبت در خبرنامه
class NewsLetters extends DB {
    protected $table = 'newsletters';

    public function insert($number) {
        try {
            $query = "INSERT INTO {$this->table} (number) VALUES (:number)";
            $stmt = $this->pdo->prepare($query);
            return $stmt->execute(['number' => $number]);
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();  // برای دیباگ
            return false;
        }
    }

    public function exists($number) {
        $query = "SELECT COUNT(*) FROM {$this->table} WHERE number = :number";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute(['number' => $number]);
        return $stmt->fetchColumn() > 0;
    }
}

// پردازش فرم و ثبت شماره
function processSubscription($number) {
    $message = new ErrorMessage();

    if (!$number || strlen($number) != 11 || !preg_match('/^09[0-9]{9}$/', $number)) {
        $message->set("num", "❌ شماره تماس نامعتبر است.");
    } else {
        $newsletter = new NewsLetters();
        if ($newsletter->exists($number)) {
            $message->set("num", "❌ این شماره قبلاً ثبت شده است.");
        } else {
            $result = $newsletter->insert($number);
            if ($result) {
                $message->set("num", "✅ عضویت با موفقیت انجام شد!");
            } else {
                $message->set("num", "❌ خطا در ذخیره شماره!");
            }
        }
    }

    // ذخیره پیام در سشن برای ارسال به صفحه index.php
    $_SESSION['message'] = $message->first('num');
}

session_start();

// بررسی ارسال درخواست
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $number = $_POST['number'] ?? null;
    processSubscription($number);

    // هدایت به صفحه اصلی (index.php)
    header("Location: ../index.php");
    exit;
}
?>
