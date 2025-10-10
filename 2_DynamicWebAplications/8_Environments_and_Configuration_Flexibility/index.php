<?php

require 'functions.php';
require 'Database.php';

//Connect to the database and, execute a query

    $db = new Database();
    $post = $db -> query("select * from posts") -> fetchAll();

    dd($post);

