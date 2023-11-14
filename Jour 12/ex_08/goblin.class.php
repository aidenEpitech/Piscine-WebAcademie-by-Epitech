<?php

require_once('character.class.php');

class Goblin extends Character
{
	private static $count = 0;

	public function __construct($name = null)
	{
		self::$count++;
		parent::__construct($name ?? "Goblin " . self::$count, 35, 20, 40, 150);
	}

	public function heal(Character $target = null)
	{
		// Implémentez la logique de guérison ici
	}
}
