<?php
    abstract class Shape{
        abstract public function area();
    }
    class Circle extends Shape{
        public float $radius;
        public function area():float{
            return 3.14 * $this->radius ** 2;
        }
        
    }

    class Rectangle extends Shape{
        public float $w;
        public float $h;
        public function area():float{
            return $this->w * $this->h;
        }

    }
    $circle1 = new Circle();
    $circle1->radius = 3;
    $circle2 = new Circle();
    $circle2->radius = 5;

    $rectagle1 = new Rectangle();
    $rectagle1->w = 2;
    $rectagle1->h = 4;  
    $shapes = [$circle1, $rectagle1, $circle2];
    foreach($shapes as $shape){
        echo $shape->area()."<br>";
    }
?>