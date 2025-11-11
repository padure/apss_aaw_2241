<?php
interface PaymentMethod
{
public function pay(float $amount);
}

class CardPayment implements PaymentMethod{
    public function pay(float $amount){
        echo "Plata cu card: " . $amount . "MDL";
    }
}

class CashPayment implements PaymentMethod{
     public function pay(float $amount){
        echo "Plata cash: " . $amount . "MDL";
    }
}

function checkout(PaymentMethod $p, float $amount){
    $p->pay( $amount);
}

checkout(new CardPayment(), 100);
checkout(new CashPayment(), 50);
?>