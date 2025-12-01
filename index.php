<?php
 
require_once("BankAccount.php");

$account = new BankAccount(owner: "nigs", balance: 0);
$account->printInfo() . "<br>";

$account->deposit(amount: 150);
echo "After deposit: 150 <br>";
$account->printInfo();

$account->withdraw(amount: 150);



?>