<?php
class Pokemon {

	public	$Name;
	public	$EnergyType;
	public	$HitPoints;
	public  $Attacks;
	public  $Weakness;
	public  $Resistance;
	public  $Damage;


public function __construct($name, $gender, $team, $oneliner)
	{
		$this->name = $name;
		$this->gender = $gender;
		$this->team = $team;
		$this->oneliner = $oneliner;
	}
	public function __toString() {
		return json_encode($this);
	}

	public function sayOneliner()
    {
        echo '<h2>' . $this->oneliner . '</h2>';
    }

    

}