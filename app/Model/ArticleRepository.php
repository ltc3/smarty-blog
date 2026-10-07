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
        return Article::class;
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
    public function findRecent(int $count = 3): iterable
    {
        return $this->findMany('SELECT id, name FROM articles ORDER BY published_at DESC LIMIT ?', [$count]);
    }
    
    /**
     * @param int $categoryId
     * @return mixed
     */
    public function countByCategory(int $categoryId): mixed
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
    public function findByCategory(int $categoryId, int $page, string $sort, string $order): iterable
    {
        $sort = in_array($sort, ['views', 'published_at'], true) ? $sort : 'views';
        $order = in_array($order, ['asc', 'desc'], true) ? $order : 'asc';

        $limit = 10;
        $offset = ($page - 1) * $limit;
        
        return $this->findMany("
            SELECT a.id, a.name
            FROM articles a
            INNER JOIN categories_articles ca ON ca.article_id = a.id
            WHERE ca.category_id = ?
            ORDER BY {$sort} {$order}
            LIMIT ?, ? 
        ", [$categoryId, $offset, $limit]);
    }
    
    /**
     * @param int $articleId
     * @param int $count
     * @return iterable
     */
    public function findSimilar(int $articleId, int $count = 3): iterable
    {
        return $this->findMany('
            SELECT a.id, a.name
            FROM categories_articles ca1
            INNER JOIN categories_articles ca2 ON ca2.category_id = ca1.category_id AND ca2.article_id != ca1.article_id
            INNER JOIN articles a ON a.id = ca2.article_id
            WHERE ca1.article_id = ?
            GROUP BY a.id
            ORDER BY COUNT(ca2.category_id) DESC
            LIMIT ?
        ', [$articleId, $count]);
    }
    
    /**
     * @param int $articleId
     * @return bool
     */
    public function updateViews(int $articleId): bool
    {
        return $this->execute('UPDATE articles SET views = views + 1 WHERE id = ?', [$articleId]);
    }
}