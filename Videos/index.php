<?php

class Playlist{

    /** @param Song[] $songs
     *
     * */

    public String $name;
    public array $songs;

    public function __construct($name, $songs){
        $this->songs = $songs;
        $this->name = $name;

    }

}

class Song{
    public string $artist;
    public string $name;

    public function __construct(string $name, string $artist){
        $this->name = $name;
        $this->artist = $artist;

    }
}

    $songs = [
        new Song("My heart will go on", "Lukas Muebles"),
        false,
        "sddasda",
        null
    ];

    $playlist = new Playlist("80 headbangers", $songs);

    foreach ($playlist->songs as $song){
        echo $song->artist;
    }




