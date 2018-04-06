<?php
class Resistance {

	public	$energytype;
	public	$worth;


	public function __construct($energytype, $worth)
	{
		$this->energytype = $energytype;
		$this->worth = $worth;
	}

}