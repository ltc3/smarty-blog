<?php
declare(strict_types=1);

namespace Core;

class Container
{
    /**
     * @var array
     */
    protected array $instances = [];
    
    /**
     * @param array $factories
     */
    public function __construct(protected array $factories)
    {}
    
    /**
     * @param string $class
     * @return object
     */
    public function get(string $class)
    {
        $this->instances[$class] = $this->instances[$class] ?? $this->create($class);
        return $this->instances[$class];
    }
    
    /**
     * @param string $class
     * @return object
     */
    protected function create(string $class): object
    {
        if (!isset($this->factories[$class])) {
            return new $class;
        } elseif (is_callable($this->factories[$class])) {
            $factory = $this->factories[$class];
            $instance = $factory($this);
            if ($instance instanceof $class) {
                return $instance;
            } else {
                throw new \Exception("Invalid class instance: {$class}");
            }
        } else {
            throw new \Exception("Invalid class factory: {$class}");
        }
    }
}