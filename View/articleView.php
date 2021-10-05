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
        <h1><?php echo $article->getTitle(); ?></h1>
        <p>Créé le : <?php echo $article->getCreatedAt()->format('y-m-d'); ?></p>
        <p><?php echo $article->getContent(); ?></p>
        <p>Statut : <?php echo $article->getStatus(); ?></p>
    </main>
</body>
</html>
