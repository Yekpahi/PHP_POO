<?php
declare(strict_types=1);

class Pont 
{
    public static int $nombrepietons = 0;

    public function nouveauPieton()
    {
        self::$nombrepietons++;
    }
}

$pontLondre = new Pont();
$pontLondre->nouveauPieton();

$pontParis = new Pont();
$pontParis->nouveauPieton();

$pontZou = new Pont();
$pontZou->nouveauPieton();

echo "Nombre de pont : " .Pont::$nombrepietons;
