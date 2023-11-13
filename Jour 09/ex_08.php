<?php
class  Character implements iMove{
	protected $name;
	protected $endurance = 50;
	protected $agility = 2;
	protected $strength = 2;
	protected $mana = 2;
	const CLASSE ="Character";
	public function __construct($name){    
		$this->name = $name;		
	}
	public function getName() {
		return $this->name;
    }
    public function getEndurance() {
		return $this->endurance;
    }
    public function getAgility() {
		return $this->agility;
    }
    public function getStrength() {
		return $this->strength;
    }
    public function getMana() {
		return $this->mana;
    }
    public function getClasse() {
		return self::CLASSE;
    }     
    public function moveRight(){
		echo "$this->name: moves right.\n";
	}
    public function moveLeft(){
		echo "$this->name: moves left.\n";
	}
    public function moveUp(){
		echo "$this->name: moves up.\n";
	}
    public function moveDown(){
		echo "$this->name: moves down.\n";
	}
}
class Paladin extends Character {
	protected $name;
	protected $endurance = 100;
	protected $agility = 8;
	protected $strength = 10;
	protected $mana = 3;
	const CLASSE ="Paladin";
	public function __construct($name){    
		$this->name = $name;
		echo "$name: I'll engrave my name in the history !\n";		
	}
	public function attack(){    
		echo "$this->name: I'll crush you with my hammer !\n";
	}		
     public function moveRight(){
		echo "$this->name: moves right like a bad boy.\n";
	}
    public function moveLeft(){
		echo "$this->name: moves left like a bad boy.\n";
	}
    public function moveUp(){
		echo "$this->name: moves up like a bad boy.\n";
	}
    public function moveDown(){
		echo "$this->name: moves down like a bad boy.\n";
	}
	public function __destruct() {
        echo "$this->name: Aarrg I can't believe I'm dead...\n";
    }
}
class Mage extends Character{
	protected $name;
	protected $endurance = 70;
	protected $agility = 10;
	protected $strength = 3;
	protected $mana = 10;
	const CLASSE ="Mage";
	public function __construct($name){    
		$this->name = $name;
		echo "$name: May the gods be with me.\n";		
	}
	public function attack(){    
		echo "$this->name: Feel the power of my magic !\n";
	}	
	 public function moveRight(){
		echo "$this->name: moves right with grace.\n";
	}
    public function moveLeft(){
		echo "$this->name: moves left with grace.\n";
	}
    public function moveUp(){
		echo "$this->name: moves up with grace.\n";
	}
    public function moveDown(){
		echo "$this->name: moves down with grace.\n";
	}
	public function __destruct() {
        echo "$this->name: By the four gods, I passed away...\n";
    }
}
interface iMove{
    public function moveRight();
    public function moveLeft();
    public function moveUp();
    public function moveDown();
}