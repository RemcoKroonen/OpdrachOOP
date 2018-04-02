<?php

class CHARMELEON extends POKEMON {

	



	public function __construct(){

		$CharmeleonAanval1 = new ATTACK('Head Butt', 10);
		$CharmeleonAanval2 = new ATTACK('Flare', 30);
		$CharmeleonWeakness = new WEAKNESS('Water', 2);
		$CharmeleonResistance = new RESISTANCE('Lightning', 10);


		parent::__construct('Charmeleon', 'Fire', 60,[$CharmeleonAanval1, $CharmeleonAanval2], $CharmeleonWeakness, $CharmeleonResistance);
	}



}