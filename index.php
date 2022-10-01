<?php 
require 'src/Model/Customer.php';
require 'src/Model/Product.php';
require 'src/Utils/Logger.php';
require 'src/Database/Logger.php';
//use Store\Model\Customer;
use Store\Model\{Customer, Product};
use Store\Utils\Logger;
use Store\Database\Logger as DatabaseLogger;

$loggers = [
    new Logger(),
    new DatabaseLogger()
];

$customer = new Customer('Bob');

echo $customer->getName();

$product = new Product();

$lg1 = new DatabaseLogger();
$lg1->log(" / Here DB /");

$lg2 = new Logger();
$lg2->log("Here Utils");