<?php
declare(strict_types=1);

class Pont 
{
   private const UNITE =  'm²';
   private float $longueur = 12;
   private float $largeur = 4;

   public function getSurface() : string
   {
    return ($this->largeur *  $this->longueur).self::UNITE;
   }

   public function setLongueur(float $longueur) 
   {
    $this->longueur = $longueur;
   }

   public function setLargeur(float $largeur) 
   {
    $this->largeur = $largeur;
   }

}

$towerBridge = new Pont;
$towerBridge->setLongueur(286.0);
$towerBridge->setLargeur(15.0);

echo $towerBridge->getSurface();

