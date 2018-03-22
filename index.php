<?php

require 'Pokemon.php';
require 'Attack.php';
require 'Resistance.php';
require 'Weakness.php';


$PikachuAanval1 = new Attack('Electric Ring', 50);
$PikachuAanval2 = new Attack('Pika Punch', 20);
$PikachuWeakness = new Weakness('Fire', 1.5);
$PikachuResistance = new Resistance('Fighting', 20);

$Pikachu =  new Pokemon('Pikachu', 'Lightning', 60, [$PikachuAanval1, $PikachuAanval2], $PikachuWeakness, $PikachuResistance);
print_r('<pre>'. $Pikachu . '</pre>');


$CharmeleonAanval1 = new Attack('Head Butt', 10);
$CharmeleonAanval2 = new Attack('Flare', 30);
$CharmeleonWeakness = new Weakness('Water', 2);
$CharmeleonResistance = new Resistance('Lightning', 10);

$Charmeleon =  new Pokemon('Charmeleon', 'Fire', 60, [$CharmeleonAanval1, $CharmeleonAanval2], $CharmeleonWeakness, $CharmeleonResistance);


print_r('<pre>'. $Charmeleon . '</pre>');

$Pikachu->Attacks($Charmeleon, 'Electric Ring');