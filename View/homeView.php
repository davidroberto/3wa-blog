<?php

/** @var Article $article */
foreach ($articles as $article) {
    echo "<h2>".$article->getTitle()."</h2>";
    echo "<p>".$article->getContent()."</p>";
//    echo "<p>".$article->getCategory()->getTitle()."</p>";
}
