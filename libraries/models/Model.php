<?php
namespace Models;

class Model
{
    protected $pdo;

    public function __construct()
    {
        $this->pdo = \Database::getPdo();
    }
}