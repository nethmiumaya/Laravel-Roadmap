<?php

require_once __DIR__ . '/../interfaces/CanIntroduce.php';
require_once 'Person.php';

class Girl extends Person implements CanIntroduce {
    public function introduce() {
        echo "Hi, I'm {$this->name} and I'm a girl." . PHP_EOL;
    }
}
