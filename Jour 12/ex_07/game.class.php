<?php

require_once('character.class.php');

class Game
{
	private $length;
	private $players = [];

	public function __construct()
	{
		echo "New game !\n";
	}

	public function addPlayer(Character $player)
	{
		$this->players[] = $player;
		echo 'New player "' . $player->getPublicName() . "\".\n";
	}

	public function player($index)
	{
		return $this->players[$index] ?? null;
	}
}
