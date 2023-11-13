<?php
abstract class Warrior{
	public function attack(){
		echo "I'll kill you, poor noob !\n";
	}
	abstract public function represent();
	abstract public function shout();
}
trait Singer{
	function sing_a_song(){
		$str = "Trololololololol";
		echo $str . "\n";
		$str = str_replace("o", "a", $str);
		echo $str . "\n";
		$str = str_replace("a", "i", $str);
		echo $str . "\n";
	}
}
class Booba extends Warrior implements GoodManners{
	use Singer;
	public function represent(){
		echo "92\n";
	}
	public function shout(){
		echo "Bah bien Morray !";
	}
	public function say_please(){
		echo "S'il-te-plait".GoodManners::END_WORDS . "\n";
	}
	public function say_thanks(){
		echo "Merci".GoodManners::END_WORDS . "\n";
	}
	public function say_sorry($name){
		echo "Mille excuses, $name" .GoodManners::END_WORDS . "\n";
	}
}
interface GoodManners{
	const END_WORDS = ", dirais-je.";
	public function say_please();
	public function say_thanks();
	public function say_sorry($name);
}
class LaFouine extends Warrior{
	use Singer;
	public function represent(){
		echo "78\n";
	}
	public function shout(){
		echo "Je suis proprietaire !";
	}
}