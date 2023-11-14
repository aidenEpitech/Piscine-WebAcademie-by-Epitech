<?php

require_once('character.class.php');

class Pangolin extends Character
{
	private static $count = 0;

	public function __construct($name = null)
	{
		self::$count++;
		parent::__construct($name ?? "Pangolin " . self::$count, 40, 10, 55, 120);
	}

	public function heal(Character $target = null)
	{
		// heal
	}
}
