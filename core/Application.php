<?php
declare(strict_types=1);

namespace Core;

abstract class Application extends Container
{
    /**
     * @param array $config
     */
    public function __construct(public readonly array $config)
    {
        parent::__construct($config['factories'] ?? []);
    }
    
    /**
     *
     */
    abstract public function run(): void;
}