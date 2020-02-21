<?php
abstract class Warrior {
    public function attack() {
        echo "I'll kill you, poor noob !\n";
    }

    abstract function represent();
    abstract function shout();
}

class Booba extends Warrior implements GoodManners {
    public function represent() {
        echo 92 . "\n";
    }

    public function shout() {
        echo "Bah bien Morray !";
    }

    public function say_please() {
        echo "S'il-te-plait" . GoodManners::END_WORDS . "\n";
    }

    public function say_thanks() {
        echo "Merci" . GoodManners::END_WORDS . "\n";
    }

    public function say_sorry($name) {
        echo "Mille excuses, " . $this->name = $name . GoodManners::END_WORDS . "\n";
    }
}

class LaFouine extends Warrior {
    public function represent() {
        echo 78 . "\n";
    }

    public function shout() {
        echo "Je suis proprietaire !";
    }
}

interface GoodManners {
    const END_WORDS = ", dirais-je.";

    public function say_please();
    public function say_thanks();
    public function say_sorry($name);
}