<?php
declare(strict_types=1);

namespace App\Model;

class Article
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
    
    /**
     * @var string
     */
    public readonly string $text;
    
    /**
     * @var string
     */
    public readonly string $image;
    
    /**
     * @var int
     */
    public readonly int $views;
    
    /**
     * @var string
     */
    public readonly string $published_at;
}