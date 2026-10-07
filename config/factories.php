<?php

use App\Application;
use Core\Http\Request;
use Core\Http\Router;
use Smarty\Smarty;

return [
    Request::class => fn(Application $app) => new Request($_SERVER['REQUEST_METHOD'], $_SERVER['REQUEST_URI'], $_GET, $_POST),
    Router::class => fn(Application $app) => new Router($app->config['routes']),
    Smarty::class => function(Application $app) {
        $smarty = new Smarty;
        $smarty->setTemplateDir($app->config['smarty']['templateDir']);
        $smarty->setCompileDir($app->config['smarty']['compileDir']);
        $smarty->setConfigDir($app->config['smarty']['configDir']);
        $smarty->setCacheDir($app->config['smarty']['cacheDir']);
        return $smarty;
    },
];