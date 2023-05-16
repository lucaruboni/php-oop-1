<?php
class Genre {
    public $first_genre;
    public $second_genre;

    public function __construct($first_genre, $second_genre)
    {
        $this->first_genre = $first_genre;
        $this->second_genre = $second_genre;
    }
}