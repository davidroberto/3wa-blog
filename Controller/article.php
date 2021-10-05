<?php

require_once("../Config/config.php");

require_once(ROOT . "/Model/Repository/ArticleRepository.php");

$id = $_GET['id'];
$articleRepository = new ArticleRepository();
$article = $articleRepository->find($id);

require_once(ROOT . '/View/articleView.php');

