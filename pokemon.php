<?php
class Pokemon {

	public	$Name;
	public	$EnergyType;
	public	$HitPoints;
	public  $Attacks;
	public  $Weakness;
	public  $Resistance;


public function __construct($Name, $EnergyType, $HitPoints, $Attacks, $Weakness, $Resistance)
	{
		$this->Name = $Name;
		$this->EnergyType = $EnergyType;
		$this->HitPoints = $HitPoints;
		$this->Attacks = $Attacks;
		$this->Weakness = $Weakness;
		$this->Resistance = $Resistance;
	}
	public function __toString() {
		return json_encode($this);
	}

	public function sayOneliner()
    {
        echo '<h2>' . $this->oneliner . '</h2>';
    }

    

}