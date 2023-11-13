<?php
class Pony{
	private $name;
	private $gender;
	private $color;
	public function __construct($name, $gender, $color){
		$this->name = $name;
		$this->gender = $gender;
		$this->color = $color;
	}
	public function __toString(){
		return "Don't worry, I'm a pony !\n";
	}
	public function speak(){
		echo "Hiii hiii hiiii\n";
	}
	public function __Call($name, $arg){
		echo "I don't know what to do...\n";
	}
	public function __get($arg){
		if(property_exists(get_class($this),$arg)){
			echo "Ce n'est pas bien de getter un attribut qui est privé !\n";
			return $this->$arg;
		}
		else{
			echo "Il n'y a pas d'attribut : " . $arg . ".\n";
		}
	}
	public function __set($arg, $value){
		if(property_exists(get_class($this),$arg)){
			echo "Ce n'est pas bien de setter un attribut qui est privé !\n";
			return $this->$arg = $value;
		}
		else{
			echo "Il n'y a pas d'attribut : " . $arg . ".\n";
		}
	}
	public function __destruct(){
		echo "I'm a dead pony.\n";
	}
}