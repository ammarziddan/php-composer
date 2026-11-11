<?php

use AmmarZiddan\Data\People;

require_once __DIR__ . '/vendor/autoload.php';

$people = new People("Ammar");

echo $people->sayHello("Ziddan") . PHP_EOL;
