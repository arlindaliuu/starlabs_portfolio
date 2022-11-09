<?php
//Database class.
class Database
{
    public $pdo;
    //Database contructor.
    public function __construct()
    {
        try {
            $link = new PDO('mysql:host=localhost;dbname=portfolioDB', 'root', '');
            $this->pdo = $link;
        } catch (PDOException $exception) {
            die($exception->getMessage());
        }
    }
}