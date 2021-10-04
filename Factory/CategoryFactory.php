<?php

require_once("../Model/Entity/Category.php");

class CategoryFactory
{

    public function createCategory(string $title): Category
    {
        $category = new Category();
        $category->setTitle($title);
        $category->setStatus(Article::STATUS_DRAFT);

        return $category;
    }

}
