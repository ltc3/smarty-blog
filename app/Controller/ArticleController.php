<?php
declare(strict_types=1);

namespace App\Controller;

use Core\Controller;
use Core\Http\Request;

class ArticleController implements Controller
{
    public function run(Request $request): array
    {
        return [];
    }
    
    public function getTemplate(): string
    {
        return 'article.tpl';
    }
}