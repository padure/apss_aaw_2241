<?php
    class Product{
        public ?string $nume = null;

        public function __construct(?string $nume = null){
            $this->nume = $nume;
        }

        public function getName():string{
            return $this->nume;
        }
    }

    class Fruct extends Product{
        public int $pret = 0;

        public function __construct(string $nume, int $pret = 0){
             parent::__construct($nume);
             $this->pret = $pret;
        }
    }

    $product = new Product("Mar");
    echo $product->getName();
?>