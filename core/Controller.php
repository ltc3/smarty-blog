<?php
declare(strict_types=1);

namespace Core;

use Core\Http\Request;

interface Controller
{
    /**
     * @return string
     */
    public function getTemplate(): string;
    
    /**
     * @param Request $request
     * @return array
     */
    public function run(Request $request): array;
}