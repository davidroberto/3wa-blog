<?php

require_once("../Config/config.php");

require_once(ROOT . "/Model/Repository/ArticleRepository.php");

$id = $_GET['id'];
$articleRepository = new ArticleRepository();
$articleRepository->remove($id);

require_once(ROOT . '/View/deleteArticleView.php');

