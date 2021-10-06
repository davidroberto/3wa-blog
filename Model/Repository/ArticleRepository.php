<?php


require_once(ROOT . "/Model/Database/MysqlDatabaseConnexion.php");
require_once(ROOT . "/Model/Entity/Article.php");
require_once(ROOT . "/Factory/ArticleFactory.php");


class ArticleRepository
{

    private ?\PDO $dbConnexion;

    public function __construct() {
        $mysqlDbConnexion = new \MysqlDatabaseConnexion();
        $this->dbConnexion = $mysqlDbConnexion->connect();
    }

    // refacto en clean code
    public function findAll(): array
    {
        $sql = "SELECT * FROM article";

        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute();
        $articlesDb = $stmt->fetchAll();

        $articleFactory = new ArticleFactory();
        return $articleFactory->createArticlesFromDb($articlesDb);
    }

    public function findLasts(int $nbArticles): array
    {
        $sql = "SELECT * FROM article ORDER BY ID DESC LIMIT $nbArticles";

        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute();
        $articlesDb = $stmt->fetchAll();

        $articleFactory = new ArticleFactory();
        return $articleFactory->createArticlesFromDb($articlesDb);
    }

    public function find(int $id): ?Article
    {
        $sql = "SELECT * FROM article where id=:id;";
        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute(['id' => $id]);
        $articleDb = $stmt->fetch();

        $articleFactory = new ArticleFactory();
        return $articleFactory->createArticleFromDb($articleDb);
    }

    public function remove(int $id): void
    {
        $sql = "DELETE FROM article where id=:id;";
        $stmt = $this->dbConnexion->prepare($sql);
        $stmt->execute(['id' => $id]);
    }


}
