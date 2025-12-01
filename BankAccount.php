<?php

class BankAccount {

    public function __construct(public $owner, public $balance = 0) {
    
    }
    public function deposit($amount): bool {
        if ($amount > 0) {
            $this->zbalance = $amount;
            return true;
        }
        return false;
}

function printInfo(): void {
echo "Owner: " . $this->owner . "<br>";
echo "Balance: $" . number_format(num: $this->balance, decimals: 2) ."<br>";
}

?>