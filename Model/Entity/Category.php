<?php

require_once(ROOT . "/Model/Entity/Publishable.php");

class Category extends Publishable
{
    private string $color;

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

}
