<?php

require __DIR__ . '/models/Movie.php';
require __DIR__ . '/models/Genre.php';



$taxi_driver = new Movie('Taxi Driver', 'lorem ipsum dolor sit amet, non me lo ricordo', 0, new Genre('Crime', 'drama'));
$taxi_driver-> setDiscount('Taxi Driver');
$taxi_driver-> getDiscount();

$non_e_un_paese_per_vecchi = new Movie('No Country for old Men', 'lorem ipsum dolor sit amet, non me lo ricordo', 0, new Genre('Crime', 'Thriller'));
$non_e_un_paese_per_vecchi-> setDiscount('No Country for old Men');
$non_e_un_paese_per_vecchi-> getDiscount();


var_dump($taxi_driver);
var_dump($non_e_un_paese_per_vecchi);