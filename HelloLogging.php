<?php
require_once __DIR__.("/vendor/autoload.php");
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger("Programmer Gie");
$log->pushHandler(new StreamHandler("application.log", Logger::INFO));

$log->info("hello wolrd");
$log->info("Belajar Composer");
?>