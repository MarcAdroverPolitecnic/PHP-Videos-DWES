<?php

require 'functions.php';
require 'Database.php';


$config = require ('config.php');

    $db = new Database($config['database']);

    $id = $_GET['id'];

    $query = "select * from posts where id = {$id}";

    dd($query);

    $post = $db -> query($query) -> fetch();

    dd($post);

