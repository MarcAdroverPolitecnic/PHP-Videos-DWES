<?php

    require 'functions.php';

    require 'router.php';

    //conect to mysql database.

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

dd($persona -> age);
dd($persona -> breathe());