<?php
declare(strict_types=1);

namespace App\Model;

class Category
{
    /**
     * @var int
     */
    public readonly int $id;
    
    /**
     * @var string
     */
    public readonly string $name;
    
    /**
     * @var string
     */
    public readonly string $description;
}