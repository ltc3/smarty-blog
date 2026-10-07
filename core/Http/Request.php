<?php
declare(strict_types=1);

namespace Core\Http;

class Request
{
    /**
     * @param string $method
     * @param string $uri
     * @param array $query
     * @param array $params
     */
    public function __construct(
        public readonly string $method,
        public readonly string $uri,
        public readonly array $query,
        public readonly array $params)
    {}
}