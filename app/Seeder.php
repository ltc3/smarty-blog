<?php
declare(strict_types=1);

namespace App;

use App\Model\ArticleRepository;
use App\Model\CategoryRepository;
use App\Model\Category;
use App\Model\Article;

class Seeder extends \Core\Application
{
    /**
     *
     */
    public function run(): void
    {
        /**
         * @var \PDO $db
         */
        $db = $this->get(\PDO::class);
        
        /**
         * @var CategoryRepository $categories
         */
        $categories = $this->get(CategoryRepository::class);
        
        /**
         * @var ArticleRepository $articles
         */
        $articles = $this->get(ArticleRepository::class);
        
        try {
            $categories->truncate();
            $articles->truncate();
            
            $db->beginTransaction();

            echo "Category creation:\n";
            $batch = [];
            $links = [];
            $categoryId = 1;
            foreach ($this->config['seeder']['categories'] as $name) {
                echo "Category: {$name}\n";
                $links[$categoryId] = [];
                $batch[] = new Category($categoryId++, $name, "Category about {$name}");
            }
            if ($categories->create(...$batch)) {
                echo count($batch) . " categories created\n";
            }
            
            $subjects = $this->config['seeder']['subjects'];
            $objects = $this->config['seeder']['objects'];
            $modifiers = $this->config['seeder']['modifiers'];
            $actions = $this->config['seeder']['actions'];
            $images = $this->config['seeder']['images'];
            
            echo "Articles creation:\n";
            $batch = [];
            for ($id = 1; $id <= 250; $id++) {
                $subject = $subjects[array_rand($subjects)];
                $object = $objects[array_rand($objects)];
                $modifier = $modifiers[array_rand($modifiers)];
                $action = $actions[array_rand($actions)];
                $image = $images[array_rand($images)];
                
                $name = "{$subject} {$action} {$object}!";
                $text = "{$subject} {$modifier} {$action} {$object}";
                $batch[] = new Article($id, $name, $text, $text, $image, 0, date('Y-m-d H:i:s'));
                
                for ($i = 0; $i < 3; $i++) {
                    $links[rand(1, $categoryId - 1)][$id] = true;
                }
                
                echo "Article: {$name}\n";
                
                if (count($batch) >= 100) {
                    if ($articles->create(...$batch)) {
                        echo count($batch) . " articles created\n";
                    }
                    $batch = [];
                }
            }
            if ($articles->create(...$batch)) {
                echo count($batch) . " articles created\n";
            }
            
            for ($id = 1; $id <= count($this->config['seeder']['categories']); $id++) {
                if ($categories->link($id, ...array_keys($links[$id]))) {
                    echo count($links[$id]) . " articles linked to category #{$id}\n";
                }
            }
            
            $db->commit();
        } catch (\Throwable $throwable) {
            $db->rollBack();
            echo "Error occured: {$throwable->getMessage()}\n";
        }
    }
}