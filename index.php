<?php

require 'POKEMON.php';
require 'ATTACK.php';
require 'RESISTANCE.php';
require 'WEAKNESS.php';
require 'PIKACHU.php';
require 'CHARMELEON.php';




$Pikachu =  new PIKACHU;
$Pikachu->ToonInfo();

//attacks,weakness,resistance moduleren
//je weet alles al
//aparte klasses die kunnen wat pokemon ook kan. pikachu.php/extend waarde van pokemon naar pikachu.php

$Charmeleon =  new CHARMELEON;
$Charmeleon->ToonInfo();


$Pikachu->Attacks($Charmeleon, 'Electric Ring');

print_r('<pre>'. $Charmeleon . '</pre>');

$Charmeleon->Attacks($Pikachu, 'Flare');

print_r('<pre>'. $Pikachu . '</pre>');