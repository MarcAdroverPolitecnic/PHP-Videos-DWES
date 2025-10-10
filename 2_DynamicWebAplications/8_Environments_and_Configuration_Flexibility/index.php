<?php

require 'functions.php';
require 'Database.php';


$config = require ('config.php');

    $db = new Database($config['database']);
    $post = $db -> query("select * from posts") -> fetchAll();

    dd($post);

