<?php
declare(strict_types=1);

namespace App\Controller;

use Core\Controller;
use Core\Http\Request;
use App\Model\CategoryRepository;
use Core\Http\Exception;
use App\Model\ArticleRepository;

class CategoryController implements Controller
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
        
        $page = (int)($request->query['page'] ?? 1);
        $sort = $request->query['sort'] ?? 'views';
        $order = $request->query['order'] ?? 'asc';
        
        $category = $this->categories->findById((int)$request->query['id']);
        if (null === $category) {
            throw new Exception('Not found', Exception::NOT_FOUND);
        }
        
        $total = $this->articles->countByCategory($category->id);
        $articles = $this->articles->findByCategory($category->id, $page, $sort, $order);
        
        return [
            'category' => $category,
            'articles' => $articles,
            'pages' => ceil($total / 10),
            'page' => $page,
            'sort' => $sort,
            'order' => $order,
        ];
    }
    
    /**
     * {@inheritDoc}
     * @see \Core\Controller::getTemplate()
     */
    public function getTemplate(): string
    {
        return 'category.tpl';
    }
}