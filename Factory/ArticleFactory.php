<?php

require_once(ROOT . "/Model/Entity/Article.php");
require_once(ROOT . "/Model/Entity/Category.php");

class ArticleFactory
{

    public function createArticle(
        string $title,
        string $content
    ): Article
    {
        $article = new Article();
        $article->setTitle($title);
        $article->setContent($content);

        return $article;
    }

    public function createArticleFromDb(array $articleFromDb): Article
    {
        $articleEntity = new Article();
        $articleEntity->setId($articleFromDb['id']);
        $articleEntity->setTitle($articleFromDb['title']);
        $articleEntity->setStatus($articleFromDb['status']);
        $articleEntity->setContent($articleFromDb['content']);
        $articleEntity->setCreatedAt(new \DateTime($articleFromDb['created_at']));

        return $articleEntity;
    }

    public function createArticlesFromDb(array $articlesFromDb): array
    {
        $articles = [];

        foreach ($articlesFromDb as $articleDb) {
            $articleEntity = $this->createArticleFromDb($articleDb);
            $articles[] = $articleEntity;
//            array_push($articles, $articleEntity);
        }

        return $articles;
    }
}
