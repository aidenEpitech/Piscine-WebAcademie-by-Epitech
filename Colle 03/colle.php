<?php
class C3PO extends Robot
{
	protected $numeroDeSerie;
	private $nom;
	private $type = "droide de protocole";

	public function __construct($nom, $type, $numeroDeSerie)
        {
		$this->nom = $nom;
		$this->type = $type;
		$this->numeroDeSerie = $numeroDeSerie +1;
		echo "Je suis le droïde de protocole numéro " . $this->numeroDeSerie . ", enchanté de vous rencontrer !\n";
	}
	public function dire($str)
	{
		echo "C3PO no " . $this->numeroDeSerie . " : " . $str . "\n";
        $command = readline("");
        if ($command == "dire") {
            $this->dire();
        }
        if ($command == "marcher") {
            $this->marcher();
        }
        if ($command == "repos") {
            echo "Fin du prototocole";
            return;
        }
	}
	public function marcher()
	{
		echo "Je me mets en route, inutile d'insister.\n";
        $command = readline("");
        if ($command == "dire") {
            $this->dire($str);
        }
        if ($command == "marcher") {
            $this->marcher();
        }
        if ($command == "repos") {
            echo "Fin du prototocole";
            return;
        }
		//Robot::marcher();
	}
	public function initierProtocole()
	{
        echo "En attente d'interaction utilisateur : \n";
        $command = readline("");
        readline_add_history($command);
        if ($command == "dire") {
            $this->dire() . $command;
        }
        if ($command == "marcher") {
            $this->marcher();
        }
        if ($command == "repos") {
            echo "Fin du prototocole";
            return;
        }
	}
	public function __destruct()
	{
		$this->numeroDeSerie++;
	}
}
// $foo = new C3PO("R2D2", "Robot", 0);
// $foo->initierProtocole();