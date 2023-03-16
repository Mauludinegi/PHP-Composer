<?php
require_once __DIR__ . ('/vendor/autoload.php');
use Programmer\Data\People;
$people = new People("giw");
echo $people->sayHello("budi") . PHP_EOL;
?>