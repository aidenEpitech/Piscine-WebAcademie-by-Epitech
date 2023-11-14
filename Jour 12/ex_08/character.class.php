<?php

abstract class Character {

	private static $count = 0;

	private $name;
	private $strength = 0;
	private $magic = 0;
	private $intelligence = 0;
	private $life = 100;

	public function __construct($name = null)
	{
		self::$count++;
		$this->name = $name ?? "Character " . self::$count;
	}

	protected function getName()
	{
		return $this->name;
	}

	protected function getStrength()
	{
		return $this->strength;
	}

	protected function getMagic()
	{
		return $this->magic;
	}

	protected function getIntelligence()
	{
		return $this->intelligence;
	}

	protected function getLife()
	{
		return $this->life;
	}

	public function __toString()
	{
		return "My name is " . $this->getName() . ".\n";
	}

	public function getPublicName()
	{
		return $this->getName();  // Utilisation de la méthode protégée getName
	}

	public function attack(Character $target)
	{
		echo '"' . $this->getPublicName() . '" hits "' . $target->getPublicName() . "\".\n";
		$target->loseHP(0);  // Ici, 0 est utilisé car la force de l'attaque n'est pas définie
	}

	private function loseHP($damage)
	{
		$this->life -= $damage;
		echo '"' . $this->getPublicName() . '" loses ' . $damage . " HP!\n";
	}

	abstract public function heal(Character $target = null);

}