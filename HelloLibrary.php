<?php
use programmergie\belajar\Customer;
require_once __DIR__ . ("/vendor/autoload.php");

$customer = new Customer("gie");
echo $customer->sayHello() . PHP_EOL;
echo $customer->sayHello("Mauludin") . PHP_EOL;