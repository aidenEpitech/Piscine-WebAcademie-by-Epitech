<?php
abstract class Warrior {
    public function attack(){
        echo "I'll kill you, poor noob !\n";
    }
    abstract public function represent();
    abstract public function shout();
}
class Booba extends Warrior{
    public function represent(){
        echo "92\n";
    }
    public function shout(){
        echo "Bah bien Morray !";
    }
}
class LaFouine extends Warrior {
    public function represent(){
        echo "78\n";
    }
    public function shout(){
        echo "Je suis proprietaire !";
    }
}