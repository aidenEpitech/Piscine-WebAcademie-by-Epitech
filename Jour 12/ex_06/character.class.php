<?php

class Character
{
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
}
