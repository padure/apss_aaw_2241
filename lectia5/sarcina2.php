<?php
    class BankAccount{
        private float $balance = 0;

        public function deposit(float $amount):void{
            $this->balance += $amount;
        }
        public function withdraw(float $amount):void{
            if($this->balance >= $amount){
                $this->balance -= $amount;
            }  
        }
        public function getBalance():float{
            return $this->balance;
        }
    }

    class BankAccountPremium extends BankAccount
    {
        private float $balance = 0;
        public function deposit(float $amount):void{
            $this->balance += $amount + $amount * 0.01;
        }
        public function getBalance():float{
            return $this->balance;
        }
    }

    $cont1 = new BankAccount();
    $cont1->deposit(1000);
    echo $cont1->getBalance();
    echo "<br>";
    $cont2 = new BankAccountPremium();
    $cont2->deposit(1000);
    echo $cont2->getBalance();
?>