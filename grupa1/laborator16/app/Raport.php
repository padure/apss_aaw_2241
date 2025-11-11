<?php
    namespace App;

    use App\Aria;
    class Raport extends Aria{
        public function __construct(int $w, int $h){
            parent::__construct($w, $h);
        }
        public function raport(): string{
            return "Aria figurii este: " . $this->aria();
        }
    }