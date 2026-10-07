<?php
declare(strict_types=1);

namespace Core\Http;

class Router
{
    /**
     * @param array $routes
     */
    public function __construct(protected array $routes)
    {}
    
    /**
     * @param Request $request
     * @return string
     */
    public function match(Request $request): string
    {
        $path = parse_url($request->uri, PHP_URL_PATH);
        $class = $this->routes[$path] ?? null;
        if (null !== $class) {
            return $class;
        } else {
            throw new Exception('Not found', Exception::NOT_FOUND);
        }
    }
}