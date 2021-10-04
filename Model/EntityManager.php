<?php

require_once("Entity/Article.php");


class EntityManager
{

    private $dbConnexion;

    // constructeur de la classe EntityManager
    //
    public function __construct() {
        $host = 'localhost';
        $username = 'root';
        $password = 'skateboard';
        $db = '3wa_blog';

        try{
            $conn = new PDO("mysql:host=$host;dbname=$db", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->dbConnexion = $conn;
        } catch(PDOException $e){
            echo "Erreur : " . $e->getMessage();
            return null;
        }
    }

    public function persistArticle(Article $article)
    {
        // je créé une requête SQL qui insert dans la table article
        // un nouvel article en utilisant les parametres PDO
        // pour que PDO supprime les potentiels balises PHP, SQL etc
        // afin d'éviter les attaques par injections SQL
        $sql = "INSERT INTO article (title, content, status, created_at)
                VALUES (
                        :title, 
                        :content, 
                        :status,
                        :created_at
                )
        ";

        // je préparer ma requête SQL définies avec les parametres
        $req = $this->dbConnexion->prepare($sql);

        // j'execute ma requête SQL en définissant la valeur des parametres
        //
        $req->execute(array(
            "title" => $article->getTitle(),
            "content" => $article->getContent(),
            "status" => $article->getStatus(),
            "created_at" => $article->getCreatedAt()->format('Y-m-d H:i:s')
        ));

    }

}
