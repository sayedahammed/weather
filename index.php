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
                   <div class="text-black-50">
                       <h4 id="loc"><?= $data['location'] ?></h4>
                       <p id="lastUpdated"><?= $data['time'] ?></p>
                       <p id="condition"><?= $data['condition'] ?></p>
                   </div>
                   <div class="d-flex pt-1">
                       <div class="tmpWrapper">
                           <div id="conditionImg">
                               <img src="<?= $data['condition_img'] ?>" alt="Overcast">
                           </div>
                           <div id="temp">
                               <h1><?= $data['temp'] ?><sup id="tempScale">°C</sup></h1>
                           </div>
                       </div>
                       <div class="metaInfo text-black-50">
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