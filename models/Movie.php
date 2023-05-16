<?php


class Movie {
    public $title;
    public $plot;
    public $genre;
    public $discount = 0;

    function __construct($title, $plot, $discount, Genre $genre)
    {
       $this->title = $title;
       $this->plot = $plot;
       $this->genre = $genre;
       $this->discount = $discount;

    }

    public function setDiscount($title){
        if ($title === "Taxi Driver") {
            $this->discount = 50;
        }
    }

    public function getDiscount(){
        return $this->discount;
    }
}