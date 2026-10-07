<?php

use App\Controller\MainController;
use App\Controller\CategoryController;
use App\Controller\ArticleController;

return [
    '/' => MainController::class,
    '/category' => CategoryController::class,
    '/article' => ArticleController::class,
];