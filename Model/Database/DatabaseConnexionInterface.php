<?php


interface DatabaseConnexionInterface
{
    public function connect(): ?PDO;
}
