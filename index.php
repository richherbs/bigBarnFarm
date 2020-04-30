<?php
require_once 'vendor/autoload.php';

$horse = new \MyApp\Horse('Usain Colt', 7, 'm');
$chicken = new \MyApp\Chicken('Hennifer Lopez', 2, 'f');
$cow = new \MyApp\Cow('Moo Donna', 67, 'f');
$barn = new \MyApp\Barn(4);

$barn->house($horse);
echo '<br>';
$barn->house($chicken);
echo '<br>';
$barn->house($cow);