<?php
class Body {
    private $head = 1;
    protected $arm = 2;
    public $hand = 2;
    protected $leg = 2;
    public $foot = 2;

    public function print_inside_attribute() {
        foreach ($this as $key => $value) {
            echo $key . " : " . $value . "\n";
        }
    }
}

function print_object_attributes($object) {
    foreach ($object as $key => $value) {
        echo $key . " => " . $value . "\n";
    }
}