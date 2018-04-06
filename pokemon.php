<?php
class Pokemon {

	public	$name;
	public	$energytype;
	public	$hitpoints;
	public  $attacks;
	public  $weakness;
	public  $resistance;


	public function __construct($name, $energytype, $hitpoints, $attacks, $weakness, $resistance)
	{
		$this->name = $name;
		$this->energytype = $energytype;
		$this->hitpoints = $hitpoints;
		$this->attacks = $attacks;
		$this->weakness = $weakness;
		$this->resistance = $resistance;
	}
	public function __toString() {
		return json_encode($this);
	}

	public function attacks($attackedpokemon,$attackname)
	{
		$totaldamage = 0;
		$aanvaldamage = 0;
		echo "<br>";
		echo  $this->name.' valt '. $attackedpokemon->name. ' aan met de aanval '.$attackname;
		//print_r($this->Attacks);
		foreach ($this->attacks as $availableattack){
			if ($availableattack->name == $attackname) {
				$aanvaldamage = $availableattack->damage;
			}
			//echo $AvailableAttack->Name;
			//echo $AvailableAttack->Damage;
		}

		$totaldamage = $aanvaldamage;

		if ($this->energytype == $attackedpokemon->weakness->energytype) {
			$totaldamage = $attackedpokemon->weakness->multiplier*$aanvaldamage; //
		}
		if ($this->energytype == $attackedpokemon->resistance->energytype) {
			$totaldamage = $totaldamage - $attackedpokemon->resistance->worth;
		}
		echo "<br>Doet ". $totaldamage . " damage";
		$attackedpokemon->hitpoints = $attackedpokemon->hitpoints - $totaldamage;

		echo "<br> Nieuwe hitpoints van ".$attackedpokemon->name . " is " . $attackedpokemon->hitpoints;


	}
	public function ToonInfo(){
		echo "<h3>".$this->name."</h3>";
		echo "Type: ". $this->energytype."<br>";
		echo "Hitpoints: ". $this->hitpoints."<br>";
		echo "Attacks and Damage:";
		foreach ($this->attacks as $key) {
			echo " ";
			echo $key->name . ",";
			echo $key->damage . " ";
			
		}
		echo "<br>";


		echo "Weakness: ";
		echo $this->weakness->energytype . ","; 
		echo $this->weakness->multiplier . "<br>";


		echo "Resistance: ";
		echo $this->resistance->energytype . ",";
		echo $this->resistance->worth . "<br>";
	}
}