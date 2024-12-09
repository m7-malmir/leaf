<?php
use Leaf\App;

$app = new App();

$app->get('/', function () {
    echo "Welcome to the Blog!";
});

// صفحه درباره ما
$app->get('/about', function () {
    echo "This is the about page.";
});

$app->run();
