<?php

    require 'functions.php';

    //require 'router.php';

    //conect to mysql database.

$dsn = "mysql:host=localhost;port=3306;dbname=myapp;char=utf9mb4";

$pdo = new PDO($dsn, 'root');

$statements = $pdo ->prepare("select * from posts");

$statements ->execute();

$posts = $statements ->fetchAll(PDO::FETCH_ASSOC);

foreach ($posts as $post){
    echo "<li>" . $post['title'] . "</li>";
}

/*
class Persona{
    public $name;
    public $age;

    function breathe(){
        echo $this->name . ' esta respirant';
    }
}

$persona = new Persona();

$persona -> name = 'John doe';
$persona -> age = 23;

$persona ->breathe();

*/