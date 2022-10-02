<?php 
/*require 'src/Model/Customer.php';
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

*/

/*class Logger {

    function log($message) {
        echo $message . "<br>";
    }

}

class DataMigrator {

    var $logger1;

    function __construct() {
        $this->logger1 = new Logger();
    }

    function migrate() {
        $this->logger1->log("Migrating. Please wait...");
    }
}

$dataMig = new DataMigrator();
$dataMig->migrate();
*/

class Level {

    public function play($message)  {
       echo $message . "<br>";
    }
}

class Level1 {
    var $numlevel;
    public function __construct() {
        $this->numlevel = new Level();
    }

    public function myplayer() {
        $this->numlevel->play("Tu joues au Foot!");
    }
}


class Animal {
    function eat() {
        echo "Eating...<br>";
    }
}

class Walkable {
    function walk() {
        echo "Walking...<br>";
    }
}

class Swimmable {
    function swim() {
        echo "Swimming...<br>";
    }
}

class Flyable {
    function fly() {
        echo "Flying...<br>";
    }
}

class Fish {

    var $animal;
    var $swimmable;

    function __construct() {
        $this->animal = new Animal();
        $this->swimmable = new Swimmable();
    }
}

class Bird {

    var $animal;
    var $walkable;
    var $swimmable;
    var $flyable;

    function __construct() {
        $this->animal = new Animal();
        $this->walkable = new Walkable();
        $this->swimmable = new Swimmable();
        $this->flyable = new Flyable();
    }
}

echo "Nemo the fish's activities:<br>";
$nemo = new Fish();
$nemo->animal->eat();
$nemo->swimmable->swim();
echo "<br>";

echo "Tweety the bird's activities:<br>";
$tweety = new Bird();
$tweety->animal->eat();
$tweety->walkable->walk();
$tweety->swimmable->swim();
$tweety->flyable->fly();

$level1 = new Level1();
$level1->myplayer();