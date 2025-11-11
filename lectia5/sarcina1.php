<?php
class Car{
  public string $brand;
  public string $model;

  public function __construct( string $brand, string $model)
  {
      $this->brand=$brand;
      $this->model=$model; 
  }

   public function getInfo():string
   {
      return $this->brand. " " .$this->model;
   }
}

$car1=new Car("Dacia", "Sandero");
$car2=new Car("Mercedes","E-Clas");
echo $car1->getInfo();
echo "<br>";
echo $car2->getInfo();  
?>