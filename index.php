<?php

require 'Pokemon.php';
require 'Attack.php';
require 'Resistance.php';
require 'Weakness.php';
require 'Pikachu.php';
require 'Charmeleon.php';




$pikachu =  new pikachu('Pikachu');
$pikachu->ToonInfo();

//attacks,weakness,resistance moduleren
//je weet alles al
//aparte klasses die kunnen wat pokemon ook kan. pikachu.php/extend waarde van pokemon naar pikachu.php

$charmeleon =  new charmeleon('Charmeleon');
$charmeleon->ToonInfo();


$pikachu->Attacks($charmeleon, 'Electric Ring');

print_r('<pre>'. $charmeleon . '</pre>');

$charmeleon->Attacks($pikachu, 'Flare');

print_r('<pre>'. $pikachu . '</pre>');

$charmeleon->Attacks($pikachu, 'Head Butt');

print_r('<pre>'. $pikachu . '</pre>');