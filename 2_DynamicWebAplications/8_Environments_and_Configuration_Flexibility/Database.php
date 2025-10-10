<?php


class Database
{
    public $connection;

    public function __construct()

    {
        $config = [
            'host' => 'localhost',
            'port' => 3306,
            'dbname' => 'myapp',
            'charset' => 'utf9mb4'
        ];

        dd(http_build_query($config, '', ';'));

        $dsn = "mysql:host={$config['host']};port={$config['port']};dbname={$config['dbname']};char=utf9mb4";

        $this->connection = new PDO($dsn, 'root', '', [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }
    public function query($query)
    {

        $statements = $this->connection->prepare($query);

        $statements->execute();

        return $statements;
    }
}