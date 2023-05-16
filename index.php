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



$taxi_driver = new Movie('Taxi Driver', 'lorem ipsum dolor sit amet, non me lo ricordo più', new Genre('Crime', 'drama'), setDiscount('Taxi Driver'), getDiscount());



$non_è_un_paese_per_vecchi = new Movie('Np Country for old Men', 'lorem ipsum dolor sit amet, non me lo ricordo più', new Genre('Crime', 'Thriller'),setDiscount('No Country for old Men'), getDiscount());


var_dump($taxi_driver);
var_dump($non_è_un_paese_per_vecchi);