<?php

class Charmeleon extends Pokemon {

	



	public function __construct($name){

		$charmeleonAanval1 = new Attack('Head Butt', 10);
		$charmeleonAanval2 = new Attack('Flare', 30);
		$charmeleonWeakness = new Weakness('Water', 2);
		$charmeleonResistance = new Resistance('Lightning', 10);


		parent::__construct($name, 'Fire', 60,[$charmeleonAanval1, $charmeleonAanval2], $charmeleonWeakness, $charmeleonResistance);
	}



}