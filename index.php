<?php
declare(strict_types=1);

require 'saveclass.php';
class BankAccount 
{
   private $balance;


   public function getBalance() 
   {
      return $this->balance;
   }

   public function deposit($amount)
   {
      if ($amount > 0) {
         $this->balance += $amount;
      }
      return $this;
   }
}


$account = new SaveClass();
$account->deposit(100);
// set interest rate
$account->setInterestRate(0.05);
$account->addInterest();
echo $account->getBalance();