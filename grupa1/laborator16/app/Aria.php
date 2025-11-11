<?php
    namespace App;
    class Aria{
        public int $w, $h;

        public function __construct(int $w, int $h){
            $this->w = $w;
            $this->h = $h;
        }

        public function aria(): int{
            return $this->w * $this->h;
        }
    }