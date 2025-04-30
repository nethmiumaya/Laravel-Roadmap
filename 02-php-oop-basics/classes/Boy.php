<?php

require_once __DIR__ . '/../interfaces/CanIntroduce.php';
require_once 'Person.php';

class Boy extends Person implements CanIntroduce {
    public function introduce() {
        echo "Hey, I'm {$this->name} and I'm a boy." . PHP_EOL;
    }
}
