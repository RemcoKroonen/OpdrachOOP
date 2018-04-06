<?php
class WEAKNESS {

	public	$energytype;
	public	$multiplier;


	public function __construct($energytype, $multiplier)
	{
		$this->energytype = $energytype;
		$this->multiplier = $multiplier;
	}

}