<?php
use Leaf\App;
use App\Controllers\HomeController;

$app = new App();

// صفحه اصلی
$app->get('/', function() {
    $controller = new HomeController();
    return $controller->index();
});

$app->run();
