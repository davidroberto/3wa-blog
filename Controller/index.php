<?php

require_once("../Config/config.php");

require_once(ROOT . "/Model/Repository/ArticleRepository.php");

$articleRepository = new ArticleRepository();
$articles = $articleRepository->findLasts(3);

include("../View/homeView.php");
