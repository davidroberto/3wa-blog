<?php

require_once("../Model/Entity/Article.php");
require_once("../Model/Entity/Category.php");

class ArticleFactory
{

    public function createArticle(
        string $title,
        string $content
//        Category $category
    ): Article
    {
        $article = new Article();
        $article->setTitle($title);
        $article->setContent($content);
//        $article->setStatus(Article::STATUS_DRAFT);
//        $article->setCategory($category);

        return $article;
    }

}
