<?php
class Product {
    private int $id;
    private string $name;
    private float $price;

    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    public function getFormattedPrice() {
        // Format the price with two decimal places
        return number_format($this->price, 2);
    }

    public function showDetails() {
        echo "Product Details:" . PHP_EOL;
        echo "- ID: {$this->id}" . PHP_EOL;
        echo "- Name: {$this->name}" . PHP_EOL;
        echo "- Price: {$this->getFormattedPrice()}" . PHP_EOL;
    }
}

// ********** You can also give input data by uncommenting this lines ***************

// $id = readline("Enter the product ID: ");
// $name = readline("Enter the product name: ");
// $price = readline("Enter the product price: ");

// $product = new Product($id, $name, $price);

// ****************************************




// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);

// Display the product details
$product->showDetails();