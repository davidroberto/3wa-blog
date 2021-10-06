

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <main>
        <?php
            /** @var Article $article */
            foreach ($articles as $article) {
                echo '<article>';
                    echo '<h2>'.$article->getTitle().'</h2>';
                    echo '<a href="article.php?id='.$article->getId().'">Voir l\'article</a></br>';
                    echo '<a href="delete-article.php?id='.$article->getId().'">Supprimer l\'article</a>';
                echo '</article>';
            }
        ?>
    </main>
</body>
</html>
