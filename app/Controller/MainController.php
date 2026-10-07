<?php
declare(strict_types=1);

namespace App\Controller;

use Core\Controller;
use Core\Http\Request;

class MainController implements Controller
{
    public function run(Request $request): array
    {
        return [
            'title' => 'Main page',
        ];
    }
    
    public function getTemplate(): string
    {
        return 'main.tpl';
    }
}