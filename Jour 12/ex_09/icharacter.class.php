<?php

interface ICharacter
{
	public function __construct($name = null);
	public function getPublicName();
	public function attack(ICharacter $target);
	public function heal(ICharacter $target = null);
}
