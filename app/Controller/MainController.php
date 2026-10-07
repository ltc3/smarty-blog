<?php
declare(strict_types=1);

namespace App\Controller;

use Core\Controller;
use Core\Http\Request;
use App\Model\CategoryRepository;
use App\Model\ArticleRepository;

class MainController implements Controller
{
    /**
     * @param CategoryRepository $categories
     * @param ArticleRepository $articles
     */
    public function __construct(protected CategoryRepository $categories, protected ArticleRepository $articles)
    {}
    
    /**
     * {@inheritDoc}
     * @see \Core\Controller::run()
     */
    public function run(Request $request): array
    {
        $categories = $this->categories->findNonEmpty();
        $articles = $this->articles->findRecent();
        
        return [
            'categories' => $categories,
            'articles' => $articles,
        ];
    }
    
    /**
     * {@inheritDoc}
     * @see \Core\Controller::getTemplate()
     */
    public function getTemplate(): string
    {
        return 'main.tpl';
    }
}