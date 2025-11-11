<?php
    namespace App;
    class Calculator{
        public float $nr1, $nr2;

        public function __construct(float $nr1, float $nr2){
            $this->nr1 = $nr1;
            $this->nr2 = $nr2;
        }

        public function sum():float{
            return $this->nr1 + $this->nr2;
        }

        public function produs():float{
            return $this->nr1 * $this->nr2;
        }
    }