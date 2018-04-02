<?php

class PIKACHU extends POKEMON {

	



	public function __construct(){

		$PikachuAanval1 = new ATTACK('Electric Ring', 50);
		$PikachuResistance = new RESISTANCE('Fighting', 20);
		$PikachuAanval2 = new ATTACK('Pika Punch', 20);
		$PikachuWeakness = new WEAKNESS('Fire', 1.5);


		parent::__construct('Pikachu', 'Lightning', 60,[$PikachuAanval1, $PikachuAanval2], $PikachuWeakness, $PikachuResistance);
	}



}



//$pikachu =  new Pokemon('Pikachu', 'Lightning', 60, [$pikachuAanval1, $pikachuAanval2], $pikachuWeakness, $pikachuResistance);
//print_r('<pre>'. $pikachu . '</pre>');