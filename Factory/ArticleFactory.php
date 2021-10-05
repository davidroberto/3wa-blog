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

    public function createArticles($nbArticles): array
    {
        $articles = [];

        for ($i = 1; $i <= $nbArticles; $i++) {
            $article = $this->createArticle("titre".$i, "content ".$i);
            array_push($articles, $article);
        }

        return $articles;
    }

}
