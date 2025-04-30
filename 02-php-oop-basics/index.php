<?php

require_once 'classes/Girl.php';
require_once 'classes/Boy.php';

$girl = new Girl("Umaya", 22);
$boy = new Boy("Jack", 25);

$girl->describe();
$girl->introduce();

$boy->describe();
$boy->introduce();
