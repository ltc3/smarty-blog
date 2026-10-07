<?php
declare(strict_types=1);

namespace App;

use Core\Controller;
use Core\Http\Request;
use Core\Http\Router;
use Smarty\Smarty;

class Application extends \Core\Application
{
    /**
     * 
     */
    public function run(): void
    {
        /**
         * @var Request $request
         */
        $request = $this->get(Request::class);
        /**
         * @var Router $router
         */
        $router = $this->get(Router::class);
        /**
         * @var Smarty $view
         */
        $view = $this->get(Smarty::class);
        
        try {
            // Hack for built-in web server
            if (is_file(WEBROOT . $request->uri)) {
                header('Content-type: image/jpeg');
                readfile(WEBROOT . $request->uri);
                return;
            }
            
            /**
             * @var Controller $controller
             */
            $controller = $this->get($router->match($request));
            
            if ($controller instanceof Controller) {
                $data = $controller->run($request);
                array_walk($data, fn($value, $key) => $view->assign($key, $value));
                $view->display($controller->getTemplate());
            } else {
                throw new \Exception('Invalid controller');
            }
        } catch (\Core\Http\Exception $exception) {
            $view->assign('message', $exception->getMessage());
            $view->assign('code', $exception->getCode());
            $view->display('error.tpl');
        } catch (\Throwable $throwable) {
            if ($this->config['debug']) {
                $view->assign('message', $throwable->getMessage());
            } else {
                $view->assign('message', 'Internal server error');
            }
            $view->assign('code', \Core\Http\Exception::INTERNAL_SERVER_ERROR);
            $view->display('error.tpl');           
        }
    }
}