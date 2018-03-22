<?php
class Resistance {

	public	$EnergyType;
	public	$Worth;


	public function __construct($EnergyType, $Worth)
	{
		$this->EnergyType = $EnergyType;
		$this->Worth = $Worth;
	}

}