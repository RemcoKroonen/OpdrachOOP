<?php

class Pikachu extends Pokemon {

	public function __construct($name){
		$pikachuAanval1 = new Attack('Electric Ring', 50);
		$pikachuResistance = new Resistance('Fighting', 20);
		$pikachuAanval2 = new Attack('Pika Punch', 20);
		$pikachuWeakness = new Weakness('Fire', 1.5);

		parent::__construct($name, 'Lightning', 60,[$pikachuAanval1, $pikachuAanval2], $pikachuWeakness, $pikachuResistance);
	}

}
//vaste naam van de pokemon nu/variable