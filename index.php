<?php

require __DIR__ . '/db.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        header{
            background-color: red;
            box-shadow: 0 0 20px black;
            height: 100px;
            position: sticky;
             top: 0;
             left: 0;
             z-index: 100;

       
        }
        main{
            background-color: grey;
        }
        .my_card{
            box-shadow: 0 5px 15px black;
        }
        .my_head{
            font-weight: 900;
             color: black;
             
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3' crossorigin='anonymous'>
    <title>movies php-oop</title>
</head>
<body>

  <header class="py-5 d-flex">
    <h1 class="my_head text-center align-self-center ms-5">MY FILM LIST</h1>
  </header>

  <main>
    <div class="container">
        <div class="row pt-5 gap-5">

            <div class="my_card card border-primary">  
              <img class="card-img-top pt-2" src="https://www.themoviedb.org/t/p/original/5MVSXJieOhbyZudCnV1H4YJpfPV.jpg" alt="">
              <div class="card-body">
                <h4 class="card-title"><?php echo $taxi_driver->title; ?></h4>
                <p class="card-text"><?php echo $taxi_driver->plot; ?></p>
                <p class="card-text"><?php echo $taxi_driver->genre->first_genre . ' ' . $taxi_driver->genre->second_genre ?></p>
                <p class="card-text">discount: <?php echo $taxi_driver->discount; ?>%</p>
              </div>
            </div>


            <div class="my_card card border-primary mb-5">  
              <img class="card-img-top pt-2" src="https://www.themoviedb.org/t/p/original/kd9jFTTabg4xJpHDgxY0h8F9BzG.jpg" alt="">
              <div class="card-body">
                <h4 class="card-title"><?php echo $non_e_un_paese_per_vecchi->title; ?></h4>
                <p class="card-text"><?php echo $non_e_un_paese_per_vecchi->plot; ?></p>
                <p class="card-text"><?php echo $non_e_un_paese_per_vecchi->genre->first_genre . ' ' . $non_e_un_paese_per_vecchi->genre->second_genre ?></p>
                <p class="card-text">discount: <?php echo $non_e_un_paese_per_vecchi->discount; ?>%</p>
              </div>
            </div>
        </div>
    </div>
  </main>
    
</body>
</html>