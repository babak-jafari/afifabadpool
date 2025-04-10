<?php
require_once 'db.php';

class ImageUploader extends DB {
    protected $table = 'images';

    public function uploadImage($file) {
        $targetDir = "img/";
        $targetFile = $targetDir . basename($file["name"]);
        $imageType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // چک کردن و ساخت پوشه اگه وجود نداره
        if (!file_exists($targetDir)) {
            mkdir($targetDir, 0777, true);
        }

        $allowedTypes = ['jpg', 'jpeg', 'png', 'gif'];
        if (!in_array($imageType, $allowedTypes)) {
            echo "فایل انتخابی مجاز نیست!";
            return false;
        }

        if (move_uploaded_file($file["tmp_name"], $targetFile)) {
            try {
                $query = "INSERT INTO {$this->table} (image_name, image_type, image_path) VALUES (:image_name, :image_type, :image_path)";
                $stmt = $this->pdo->prepare($query);
                $stmt->execute([
                    'image_name' => $file['name'],
                    'image_type' => $imageType,
                    'image_path' => $targetFile
                ]);
                return true;
            } catch (PDOException $e) {
                echo "خطای دیتابیس: " . $e->getMessage();
                return false;
            }
        } else {
            echo "خطا در انتقال فایل! مسیر: $targetFile - قابل نوشتن: " . (is_writable($targetDir) ? "بله" : "خیر");
            return false;
        }
    }

    public function getAllImages() {
        $query = "SELECT * FROM {$this->table}";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>