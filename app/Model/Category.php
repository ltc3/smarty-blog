<?php
declare(strict_types=1);

namespace App\Model;

class Category
{
    /**
     * @param int $id
     * @param string $name
     * @param string $description
     */
    public function __construct(
        public readonly int $id,
        public readonly string $name,
        public readonly string $description)
    {}
}