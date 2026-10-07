<?php
declare(strict_types=1);

namespace App\Controller;

use Core\Controller;
use Core\Http\Request;

class CategoryController implements Controller
{
    public function run(Request $request): array
    {
        return [];
    }
    
    public function getTemplate(): string
    {
        return 'category.tpl';
    }
}