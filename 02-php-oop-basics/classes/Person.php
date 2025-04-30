<?php

class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function describe() {
        echo "Name: {$this->name}, Age: {$this->age}" . PHP_EOL;
    }
}
