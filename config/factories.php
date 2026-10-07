<?php

use App\Application;
use Core\Http\Request;
use Core\Http\Router;
use Smarty\Smarty;
use App\Model\CategoryRepository;
use App\Controller\CategoryController;
use App\Model\ArticleRepository;
use App\Controller\MainController;
use App\Controller\ArticleController;

return [
    // HTTP
    Request::class => fn(Application $app) => new Request($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI'], $_GET, $_POST),
    Router::class => fn(Application $app) => new Router($app->config['routes']),
    // View
    Smarty::class => function(Application $app) {
        $smarty = new Smarty;
        $smarty->setTemplateDir($app->config['smarty']['templateDir']);
        $smarty->setCompileDir($app->config['smarty']['compileDir']);
        $smarty->setConfigDir($app->config['smarty']['configDir']);
        $smarty->setCacheDir($app->config['smarty']['cacheDir']);
        return $smarty;
    },
    // Database
    PDO::class => fn(Application $app) => new PDO(
        $app->config['db']['dsn'],
        $app->config['db']['user'],
        $app->config['db']['pass'],
    ),
    // Model
    CategoryRepository::class => fn(Application $app) => new CategoryRepository($app->get(PDO::class)),
    ArticleRepository::class => fn(Application $app) => new ArticleRepository($app->get(PDO::class)),
    // Controller
    MainController::class => fn(Application $app) => new MainController(
        $app->get(CategoryRepository::class),
        $app->get(ArticleRepository::class),
        ),
    CategoryController::class => fn(Application $app) => new CategoryController(
        $app->get(CategoryRepository::class),
        $app->get(ArticleRepository::class),
    ),
    ArticleController::class => fn(Application $app) => new ArticleController(
        $app->get(CategoryRepository::class),
        $app->get(ArticleRepository::class),
    ),
];