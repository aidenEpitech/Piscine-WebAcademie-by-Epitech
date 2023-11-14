<?php
class hero extends personnage
{
	private $vie;
	private $force;
	private $magie;
	private $agilite;
	private $intelligence;

	const MY_HERO = "Pango";

	public function __construct($vie, $force, $magie, $agilite, $intelligence)
	{
		$this->vie = $vie;
		$this->force = $force;
		$this->magie = $magie;
		$this->agilite = $agilite;
		$this->intelligence = $intelligence;
	}

	final public function getVie()
	{
		return $this->vie;
	}

	final public function getForce()
	{
		return $this->force;
	}

	final public function getMagie()
	{
		return $this->magie;
	}

	final public function getAgilite()
	{
		return $this->agilite;
	}
	
	final public function getIntelligence()
	{
		return $this->intelligence;
	}
}
