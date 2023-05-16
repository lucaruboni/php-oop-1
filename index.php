<?php

class Movie {
    public $title;
    public $plot;
    public $genre;
    public $discount = 0;

    public function setDiscount($title){
        if ($title === "Taxi Driver") {
            $this->discount = 50;
        }
    }

    public function getDiscount(){
        return $this->discount;
    }
}


$taxi_driver = new Movie();
$taxi_driver->title = "Taxi Driver";
$taxi_driver->plot = "lorem ipsum dolor sit amet, non me lo ricordo più";
$taxi_driver->genre = "Crime, Drama";
$taxi_driver->setDiscount('Taxi Driver');
$taxi_discount = $taxi_driver->getDiscount();

$non_è_un_paese_per_vecchi = new Movie();
$non_è_un_paese_per_vecchi->title = "No Country for old Men";
$non_è_un_paese_per_vecchi->plot = "lorem ipsum dolor sit amet, non me lo ricordo più";
$non_è_un_paese_per_vecchi->genre = "Crime, thriller";
$non_è_un_paese_per_vecchi->setDiscount('No Country for old Men');
$paese_discount = $non_è_un_paese_per_vecchi->getDiscount();

var_dump($taxi_driver);
var_dump($non_è_un_paese_per_vecchi);