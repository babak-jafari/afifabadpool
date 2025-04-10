<?php
require_once './php/db.php';
require_once './php/imageUploader.php';

$imageUploader = new ImageUploader();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['file'])) {
    $file = $_FILES['file'];
    if ($imageUploader->uploadImage($file)) {
        echo "تصویر با موفقیت آپلود شد!<br>";
        echo "مسیر فایل: img/" . $file['name'];
    } else {
        echo "خطا در آپلود تصویر.<br>";
    }
}

$images = $imageUploader->getAllImages();
?>

<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>آپلود و نمایش تصویر</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 p-4">
    <h1 class="text-2xl font-bold text-center mb-6">آپلود و نمایش تصویر</h1>

    <!-- فرم آپلود -->
    <form action="" method="POST" enctype="multipart/form-data" class="max-w-md mx-auto mb-8">
        <label for="file" class="block mb-2">انتخاب تصویر:</label>
        <input type="file" name="file" id="file" required class="block w-full mb-4 p-2 border rounded">
        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">آپلود تصویر</button>
    </form>

    <!-- نمایش تصاویر -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php if (!empty($images)): ?>
            <?php foreach ($images as $image): ?>
                <div class="bg-white shadow-lg p-4 rounded-xl transition-transform duration-300 hover:scale-105">
                    <!-- دیباگ مسیر -->
                    <p class="text-sm text-gray-500">مسیر: <?php echo htmlspecialchars($image['image_path']); ?></p>
                    <img class="block mx-auto w-25" src="/afifabadpool/<?php echo htmlspecialchars($image['image_path']); ?>" alt="<?php echo htmlspecialchars($image['image_name']); ?>">
                    <h3 class="text-lg font-semibold mt-4 text-center"><?php echo htmlspecialchars($image['image_name']); ?></h3>
                    <p class="hidden md:block mt-2 text-gray-700 text-justify">اتاق نمک با طراحی خاص و خواص درمانی به بهبود تنفس و آرامش ذهن کمک می‌کند.</p>
                </div>
            <?php endforeach; ?>
        <?php else: ?>
            <p class="text-center text-gray-500">هنوز تصویری آپلود نشده است.</p>
        <?php endif; ?>
    </div>
</body>
</html>