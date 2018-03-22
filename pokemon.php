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

	public function Attacks($AttackedPokemon,$AttackName)
	{
		$TotalDamage = 0;
		$AanvalDamage = 0;
		echo  $this->Name.' valt '. $AttackedPokemon->Name. ' aan met de aanval '.$AttackName;
		print_r($this->Attacks);
		foreach ($this->Attacks as $AvailableAttack){
			if ($AvailableAttack->Name == $AttackName) {
				$AanvalDamage = $AvailableAttack->Damage;
			}
			echo $AvailableAttack->Name;
			echo $AvailableAttack->Damage;
		}

		if ($this->EnergyType == $AttackedPokemon->Weakness->EnergyType) {
			$TotalDamage = $AttackedPokemon->Weakness->Multiplier*$AanvalDamage;
		} else {

			$TotalDamage = $AanvalDamage;
		}
		if ($this->EnergyType == $AttackedPokemon->Resistance->EnergyType) {
			$TotalDamage = $TotalDamage - $AttackedPokemon->Resistance->Worth;
		}
		echo "<br>". $TotalDamage;


	}


}