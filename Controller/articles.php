<?php

require_once("../Config/config.php");

require_once(ROOT . "/Model/Repository/ArticleRepository.php");

$articleRepository = new ArticleRepository();
$articles = $articleRepository->findAll();

require_once(ROOT . '/View/articlesView.php');
