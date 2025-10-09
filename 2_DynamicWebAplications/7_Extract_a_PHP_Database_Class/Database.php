<?php


class Database
{

    public $connection;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;char=utf9mb4";

        $this->connection = new PDO($dsn);
    }

    public function query($query)
    {

        $statements = $this->connection->prepare($query);

        $statements->execute();

        return $statements;
    }
}