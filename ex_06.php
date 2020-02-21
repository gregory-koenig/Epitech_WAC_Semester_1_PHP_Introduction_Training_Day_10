<?php
class Pony {
    private $name;
    private $gender;
    private $color;

    public function __construct($name, $gender, $color) {
        $this->name = $name;
        $this->gender = $gender;
        $this->color = $color;
    }

    public function __destruct() {
        echo "I'm a dead pony.\n";
    }

    public function __toString() {
        return "Don't worry, I'm a pony !\n";
    }

    public function speak() {
        echo "Hiii hiii hiiii\n";
    }

    public function __call($name, $arguments) {
        echo "I don't know what to do...\n";
    }

    public function __set($property, $value) {
        if (isset($this->$property)) {
            echo "Ce n'est pas bien de setter un attribut qui est privé !\n";
            $this->$property = $value;
        } else {
            echo "Il n'y pas d'attributs : $property.\n";
        }
    }

    public function __get($property) {
        if (isset($this->$property)) {
            echo "Ce n'est pas bien de getter un attribut qui est privé !\n";
            return $this->$property;
        } else {
            echo "Il n'y a pas d'attributs : $property.\n";
        }
    }
}