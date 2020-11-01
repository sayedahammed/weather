<?php

require_once 'app/Weather.php';

$data = Weather::getWeather();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Weather</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet"> </head>
<body>

<div class="container">
    <div class="row justify-content-center">
       <div class="col-md-6 mt-3">
           <div class="card">
               <div class="card-body">
                   <div class="row">
                       <div class="col-md-12 text-black-50">
                           <p id="loc"><?= $data['location'] ?></p>
                           <p id="lastUpdated"><?= $data['time'] ?></p>
                           <p id="condition"><?= $data['condition'] ?></p>
                       </div>
                   </div>
                   <div class="row pt-1">
                       <div class="col-md-6 tmpWrapper">
                           <div id="conditionImg">
                               <img src="<?= $data['condition_img'] ?>" alt="Overcast">
                           </div>
                           <div id="temp">
                               <h1><?= $data['temp'] ?><sup id="tempScale">°C</sup></h1>
                           </div>
                       </div>
                       <div class="col-md-6 metaInfo text-black-50">
                           <p>Precipitation: <?= $data['precip'] ?> %</p>
                           <p>Humidity: <?= $data['humidity'] ?> %</p>
                           <p>Wind: <?= $data['wind'] ?> kph</p>
                       </div>
                   </div>
               </div>
           </div>
       </div>
    </div>
</div>

<script src="js/bootstrap.js"></script>
</body>
</html>