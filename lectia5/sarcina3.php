<?php
class Product {
    public string $title;
    public string $sku;
    public float $price;

    public function __construct(string $title, string $sku, float $price) {
        $this->title = $title;
        $this->sku = $sku;
        $this->price = $price;
    }

    public function getPriceWithTax(float $tax): float {
        return $this->price + $this->price*$tax/100;
    }
}

$prod1 = new Product("LAptop", "lap-000", 22000.56);
$prod2 = new Product("Car", "car-000", 220900.56);
echo $prod1->getPriceWithTax(20);
echo "<br>" . $prod2->getPriceWithTax(20);