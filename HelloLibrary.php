<?php

use AmmarZiddan\Belajar\Customer;

require_once __DIR__ . '/vendor/autoload.php';

$customer = new Customer("Budi");

echo $customer->sayHello() . PHP_EOL;
echo $customer->sayHello("Eko") . PHP_EOL;
