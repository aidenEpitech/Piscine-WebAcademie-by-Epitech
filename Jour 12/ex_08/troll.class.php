<?php

require_once('character.class.php');

class Troll extends Character
{
	private static $count = 0;

	public function __construct($name = null)
	{
		self::$count++;
		parent::__construct($name ?? "Troll " . self::$count, 50, 15, 10, 200);
	}

	public function heal(Character $target = null)
	{
		//guérison
	}
}
