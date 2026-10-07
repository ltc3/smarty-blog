<?php
declare(strict_types=1);

namespace App\Model;

class Article
{
    /**
     * @param int $id
     * @param string $name
     * @param string $description
     * @param string $text
     * @param string $image
     * @param int $views
     * @param string $published_at
     */
    public function __construct(
        public readonly int $id,
        public readonly string $name,
        public readonly string $description,
        public readonly string $text,
        public readonly string $image,
        public readonly int $views,
        public readonly string $published_at)
    {}
}