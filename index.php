<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle();

$bike->setColor = 'blue';
$bike->getCurrentSpeed = 0;

// Moving bike

echo $bike->forward();

echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed . ' km/h' . '<br>';

echo $bike->brake();

echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed . ' km/h' . '<br>';

echo $bike->brake();


// New car

$Peugeot = new Car('grey', 4, 50);
$Peugeot->getCurrentSpeed = 0;

var_dump($Peugeot);

// Moving car
echo $Peugeot->forward();

echo '<br> Vitesse de ma Peugeot : ' . $Peugeot->getCurrentSpeed . ' km/h' . '<br>';

echo $Peugeot->brake();

echo '<br> Vitesse de ma Peugeot : ' . $Peugeot->getCurrentSpeed . ' km/h' . '<br>';

echo $Peugeot->brake();