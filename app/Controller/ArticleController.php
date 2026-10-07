<?php
declare(strict_types=1);

namespace App\Controller;

use Core\Controller;
use Core\Http\Request;
use App\Model\ArticleRepository;
use Core\Http\Exception;
use App\Model\CategoryRepository;

class ArticleController implements Controller
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
        if (empty($request->query['id'])) {
            throw new Exception('Not found', Exception::NOT_FOUND);
        }
        
        $article = $this->articles->findById((int)$request->query['id']);
        $articles = $this->articles->findSimilar($article->id);
        $categories = $this->categories->findByArticle($article->id);
        $this->articles->updateViews($article->id);
        
        return [
            'article' => $article,
            'articles' => $articles,
            'categories' => $categories,
        ];
    }
    
    /**
     * {@inheritDoc}
     * @see \Core\Controller::getTemplate()
     */
    public function getTemplate(): string
    {
        return 'article.tpl';
    }
}