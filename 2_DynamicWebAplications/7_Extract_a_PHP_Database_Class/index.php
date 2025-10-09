<?php

require 'functions.php';

//Connect to the database and, execute a query

class Database {

    public function __construct(){
        $dsn = "mysql:host=localhost;port=3306;dbname=myapp;user=root;char=utf9mb4";

        $pdo = new PDO($dsn);
    }
    public function query($query){

        $statements = $pdo ->prepare($query);

        $statements ->execute();

        return $statements ->fetchAll(PDO::FETCH_ASSOC);
        }
}

$db = new Database();
$posts = $db -> query("select * from posts where id > 1");


foreach ($posts as $post){
    echo "<li>" . $post['title'] . "</li>";
}