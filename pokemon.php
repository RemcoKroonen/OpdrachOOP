<?php
class POKEMON {

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
		echo "<br>";
		echo  $this->Name.' valt '. $AttackedPokemon->Name. ' aan met de aanval '.$AttackName;
		//print_r($this->Attacks);
		foreach ($this->Attacks as $AvailableAttack){
			if ($AvailableAttack->Name == $AttackName) {
				$AanvalDamage = $AvailableAttack->Damage;
			}
			//echo $AvailableAttack->Name;
			//echo $AvailableAttack->Damage;
		}

		$TotalDamage = $AanvalDamage;

		if ($this->EnergyType == $AttackedPokemon->Weakness->EnergyType) {
			$TotalDamage = $AttackedPokemon->Weakness->Multiplier*$AanvalDamage; //
		}
		if ($this->EnergyType == $AttackedPokemon->Resistance->EnergyType) {
			$TotalDamage = $TotalDamage - $AttackedPokemon->Resistance->Worth;
		}
		echo "<br>Doet ". $TotalDamage . " damage";
		$AttackedPokemon->HitPoints = $AttackedPokemon->HitPoints - $TotalDamage;

		echo "<br> Nieuwe HitPoints van ".$AttackedPokemon->Name . " is " . $AttackedPokemon->HitPoints;


	}
	public function ToonInfo(){
		echo "<h3>".$this->Name."</h3>";
		echo "Type: ". $this->EnergyType."<br>";
		echo "Hitpoints: ". $this->HitPoints."<br>";
		echo "Attacks and Damage:";
		foreach ($this->Attacks as $key) {
			echo " ";
			echo $key->Name . ",";
			echo $key->Damage . " ";
			
		}
		echo "<br>";


		echo "Weakness: ";
		echo $this->Weakness->EnergyType . ","; 
		echo $this->Weakness->Multiplier . "<br>";


		echo "Resistance: ";
		echo $this->Resistance->EnergyType . ",";
		echo $this->Resistance->Worth . "<br>";
	}
}