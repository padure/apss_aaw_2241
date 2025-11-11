<?php
    abstract class Product{
        
        abstract public function getPrice():float;
    }

    class BookProduct extends Product{

        private float $price;
        private float $tva;
        
        public function __construct(float $price,float $tva){
            $this->price = $price;
            $this->tva = $tva;
        }

        public function getPrice(): float{
            return $this->price + ($this->price * ($this->tva / 100));
        }
    }

    $book = new BookProduct(200,  20);
    echo "Pretul inclus cu TVA: ". $book->getPrice(). " lei";
?>