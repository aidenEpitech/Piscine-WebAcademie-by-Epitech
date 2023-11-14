<?php

interface IGame
{
	public function addPlayer(ICharacter $player);
	public function player($index);
}
