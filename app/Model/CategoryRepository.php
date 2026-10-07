<?php
declare(strict_types=1);

namespace App\Model;

use Core\Model\Repository;

class CategoryRepository extends Repository
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
     * @return iterable
     */
    public function findNonEmpty(): iterable
    {
        return $this->findMany('SELECT c.* FROM categories c INNER JOIN categories_articles ca ON ca.category_id = c.id GROUP BY c.id');
    }
    
    /**
     * @param int $articleId
     * @return iterable
     */
    public function findByArticle(int $articleId): iterable
    {
        return $this->findMany('SELECT c.* FROM categories c INNER JOIN categories_articles ca ON ca.category_id = c.id WHERE ca.article_id = ?', [$articleId]);
    }
    
    /**
     * @param int $id
     * @return Category
     */
    public function findById(int $id): ?Category
    {
        return $this->findOne('SELECT * FROM categories WHERE id = ?', [$id]);
    }
}