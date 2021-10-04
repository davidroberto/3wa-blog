<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

require_once("../Factory/ArticleFactory.php");
require_once("../Model/EntityManager.php");

include("../View/createArticleView.php");


if (!empty($_POST) &&
    !empty($_POST['title']) &&
    !empty($_POST['content'])
) {
    $articleFactory = new ArticleFactory();
    $article = $articleFactory->createArticle($_POST['title'], $_POST['content']);
    $entityManager = new EntityManager();
    $entityManager->persistArticle($article);

}


