<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/../routes/web.php';

use Leaf\App;

$app = new App();


$app->config('base_url', '/leaf/public/'); 


use App\Models\Database;

$db = Database::connect();

$baseUrl = $app->config('base_url');
?>
<!DOCTYPE html>


<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>وبلاگ من</title>
    <link rel="stylesheet" href="<?php echo $baseUrl . 'assets/css/tailwind.css'; ?>">
</head>
<body>
    <!-- هدر -->
    <?php include __DIR__ . '/../app/views/header.php'; ?>
    <!-- محتوای اصلی -->
    <main>
        <section class="intro">
            <h1>به وبلاگ خوش آمدید!</h1>
            <p>در اینجا می‌توانید جدیدترین مطالب و آموزش‌های مرتبط با طراحی سایت و برنامه نویسی را پیدا کنید.</p>
        </section>
        <!-- بخش دوره‌های آموزشی -->
        <section class="courses">
            <h2>دوره‌های آموزشی</h2>
            <p>آموزش‌های جدید و جذاب برای شما آماده شده است. با ما همراه باشید!</p>
            <div class="course-list">
                <div class="course">
                    <div class="course-image">
                        <img src="https://via.placeholder.com/350x200" alt="دوره Laravel">
                    </div>
                    <h3>آموزش 1: شروع با Laravel</h3>
                    <p>آموزش کامل شروع کار با فریم‌ورک Laravel برای ساخت برنامه‌های تحت وب.</p>
                    <a href="/courses/laravel" class="btn">شروع کنید</a>
                </div>
                <div class="course">
                    <div class="course-image">
                        <img src="https://via.placeholder.com/350x200" alt="دوره HTML و CSS">
                    </div>
                    <h3>آموزش 2: طراحی سایت با HTML و CSS</h3>
                    <p>یاد بگیرید چطور یک سایت حرفه‌ای با استفاده از HTML و CSS بسازید.</p>
                    <a href="/courses/html-css" class="btn">شروع کنید</a>
                </div>
                <div class="course">
                    <div class="course-image">
                        <img src="https://via.placeholder.com/350x200" alt="دوره JavaScript">
                    </div>
                    <h3>آموزش 3: شروع با JavaScript</h3>
                    <p>با JavaScript آشنا شوید و به دنیای برنامه‌نویسی وب قدم بگذارید.</p>
                    <a href="/courses/javascript" class="btn">شروع کنید</a>
                </div>
            </div>
        </section>
    </main>
    <!-- فوتر -->
    <?php include __DIR__ . '/../app/views/footer.php'; ?>
</body>
</html>