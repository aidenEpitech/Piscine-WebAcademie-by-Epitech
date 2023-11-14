<?php
namespace Imperium;
class Soldier{
	private $hp;
	private $attack;
	private $name;
	public function __construct($name, $hp=50, $attack=12){
		$this->setHp($hp);
		$this->setAttack($attack);
		$this->setName($name);
	}
	public function getHp(){
		return $this->hp;
    }
	public function getAttack(){
		return $this->attack;
    }
    public function getName(){
		return $this->name;
    }
    public function setHp($hp){
		$this->hp = $hp;
	}
	public function setAttack($attack){
		$this->attack = $attack;
	}
	public function setName($name){
		$this->name = $name;
	}
	public function doDamage($obj){
		return $obj->setHp($obj->getHp() - $this->getAttack());
    }
  public function __toString(){
    return "$this->name the ". __NAMESPACE__ ." Space Marine : $this->hp HP.";
	}
}
namespace Chaos;
class Soldier{
	private $hp;
	private $attack;
	private $name;
	public function __construct($name, $hp = 70, $attack = 12){
		$this->setHp($hp);
		$this->setAttack($attack);
		$this->setName($name);
	}
	public function getHp(){
		return $this->hp;
    }
	public function getAttack(){
		return $this->attack;
    }
    public function getName(){
		return $this->name; 
    }

	public function setHp($hp){
		$this->hp = $hp;
	}
	public function setAttack($attack){
		$this->attack = $attack;
	}
	public function setName($name){
		$this->name = $name;
	}
	public function doDamage($obj){
		return $obj->setHp($obj->getHp() - $this->getAttack());
    }
  public function __toString(){
    return "$this->name the " . __NAMESPACE__ ." Space Marine : $this->hp HP.";
    }
}