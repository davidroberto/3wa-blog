<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

//require_once("../Factory/ArticleFactory.php");
//require_once("../Factory/CategoryFactory.php");
//
//$articleFactory = new ArticleFactory();
//$categoryFactory = new CategoryFactory();
//
//$articles = [];
//
//for ($i = 1; $i <= 6; $i++) {
//    $category = $categoryFactory->createCategory("categorie xxx");
//    $article = $articleFactory->createArticle("titre".$i, "content ".$i, $category);
//    array_push($articles, $article);
//}
//
//include("../View/homeView.php");

//require_once('../Model/Entity/Article.php');
require_once('../Model/EntityManager.php');

$article = new Article();

$article->setTitle("PHP avancé");
$article->setContent("Découvrez le PHP avancé avec 3wa");
$article->setCreatedAt(new \DateTime('NOW'));
$article->setStatus("published");

$entityManager = new EntityManager();
$entityManager->persistArticle($article);
