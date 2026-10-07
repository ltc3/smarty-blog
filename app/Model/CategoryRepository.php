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
    
    /**
     * @param Category ...$categories
     * @return bool
     */
    public function create(Category ...$categories): bool
    {
        if (!count($categories)) {
            return false;
        }
        
        $placeholders = implode(',', array_fill(0, count($categories), '(?, ?, ?)'));
        $params = array_merge(...array_map(fn($category) => [$category->id, $category->name, $category->description], $categories));
        return $this->execute("INSERT INTO categories (id, name, description) VALUES {$placeholders}", $params);
    }
    
    /**
     * @param int $categoryId
     * @param int ...$articleIds
     * @return boolean
     */
    public function link(int $categoryId, int ...$articleIds)
    {
        if (!count($articleIds)) {
            return false;
        }
        
        $placeholders = implode(',', array_fill(0, count($articleIds), '?'));
        $params = [$categoryId, ...$articleIds];
        return $this->execute("INSERT INTO categories_articles (category_id, article_id) SELECT ?, id FROM articles WHERE id IN ({$placeholders})", $params);
    }
    
    /**
     * @return bool
     */
    public function truncate(): bool
    {
        return $this->execute('TRUNCATE categories') && $this->execute('TRUNCATE categories_articles');
    }
}