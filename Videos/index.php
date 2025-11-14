<?php

class Playlist{

    public $name;
    public $songs;

    public function __construct($name, $songs){

        $this ->name = $name;
        $this ->songs = $songs;
    }

    public function shuffle(){
        shuffle($this -> songs);
    }
}

    $playlist = [];


    $playlist[] = new Playlist("80 headbangers", [
        "back in black",
        "are you ready"
    ]);


    $playlist[0]-> shuffle();
    die(var_dump($playlist));




