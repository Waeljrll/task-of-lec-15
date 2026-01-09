<?php 

use Dom\Text;


class Product{
    public string $name;
    public float $price;
    public string $brand;

    public string $image;

    public string $description;

    public int $tax ;

    function __construct(string $name, float $price, string $brand, string $image, string $description, int $tax) {
        $this->name = $name;
        $this->price = $price;
        $this->brand = $brand;
        $this->image = $image;
        $this->description = $description;
        $this->tax = $tax;
    }

    function getName(){
        return $this->name;
    }
    function priceAfterDiscount($discount){
        return $this->price - ($this->price * $discount / 100);
    }

    function getFinalPrice(){
        return $this->price + ($this->price * $this->tax / 100);
    }
}

$product1=new product("Laptop", 1000, "Dell", "laptop.jpg", "A high-performance laptop", 15);
echo "Product Name: " . $product1->getName() . "</br>";
echo "Price after 10% discount: $" . $product1->priceAfterDiscount(10) . "</br>";
echo "Final Price (including tax): $" . $product1->getFinalPrice() .
"</br>";
$product2=new product("Smartphone", 500, "Samsung", "smartphone.jpg", "A latest model smartphone", 10);
echo "Product Name: " . $product2->getName() . "</br>";
echo "Price after 5% discount: $" . $product2->priceAfterDiscount(5) . "</br>";
echo "Final Price (including tax): $" . $product2->getFinalPrice() . "</br>";