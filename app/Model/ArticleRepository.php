<?php
declare(strict_types=1);

namespace App\Model;

use Core\Model\Repository;

class ArticleRepository extends Repository
{
    /**
     * {@inheritDoc}
     * @see \Core\Model\Repository::getEntityClass()
     */
    public function getEntityClass(): string
    {
        return Category::class;
    }

    /**
     * @param int $id
     * @return Category
     */
    public function findById(int $id): Article
    {
        return $this->findOne('SELECT * FROM articles WHERE id = ?', [$id]);
    }
    
    /**
     * @param int $count
     * @return iterable
     */
    public function findRecent(int $count)
    {
        return $this->findMany('SELECT * FROM articles ORDER BY published_at DESC LIMIT ?', [$count]);
    }
    
    /**
     * @param int $categoryId
     * @return mixed
     */
    public function countByCategory(int $categoryId)
    {
        return $this->findScalar('SELECT COUNT(article_id) FROM categories_articles WHERE category_id = ?', [$categoryId]);
    }
    
    /**
     * @param int $categoryId
     * @param int $page
     * @param string $sort
     * @param string $order
     * @return iterable
     */
    public function findByCategory(int $categoryId, int $page, string $sort, string $order)
    {
        $sort = in_array($sort, ['views', 'published_at'], true) ? $sort : 'views';
        $order = in_array($order, ['asc', 'desc'], true) ? $order : 'asc';

        $limit = 10;
        $offset = ($page - 1) * $limit;
        
        return $this->findMany("
            SELECT a.name
            FROM articles a
            INNER JOIN categories_articles ca ON ca.article_id = a.id
            WHERE ca.category_id = ?
            ORDER BY {$sort} {$order}
            LIMIT ?, ? 
        ", [$categoryId, $offset, $limit]);
    }
}