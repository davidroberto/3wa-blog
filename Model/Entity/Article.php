<?php

require_once("Publishable.php");
require_once("Category.php");


class Article extends Publishable
{

    public const STATUS_PUBLISHED = 'online';
    public const STATUS_DRAFT = 'draft';
    public const STATUS_ARCHIVE = 'archive';

    private string $content;

    private Category $category;

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * @return Category
     */
    public function getCategory(): Category
    {
        return $this->category;
    }

    /**
     * @param Category $category
     */
    public function setCategory(Category $category): void
    {
        $this->category = $category;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     */
    public function setContent(string $content): void
    {
        $this->content = $content;
    }

}
