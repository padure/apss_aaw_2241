<?php

class Money {
    public int $centi;
    public function __construct(int $centi){
        $this->centi = $centi;
    }
    public function __tostring(){
        return number_format($this->centi/100, 2, ".", "") . "MDL";
    }
}

echo new Money(100);
echo new Money(5400);
echo new Money(4567);


?>