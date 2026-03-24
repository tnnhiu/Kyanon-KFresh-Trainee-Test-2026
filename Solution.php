<?php

class Product
{
    private $id;
    private $name;
    private $price;
    private $category;

    public function __construct($id, $name, $price, $category)
    {
        $this->id       = $id;
        $this->name     = $name;
        $this->price    = $price;
        $this->category = $category;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function getCategory()
    {
        return $this->category;
    }
    public function setPrice($price)
    {
        $this->price = $price;
    }
}

// Tạo một danh sách đối tượng chứa ít nhất 5 sản phẩm.

$products = [
    new Product(1, "Balo Lenovo Legion Active", 500000, "Backpacks"),
    new Product(2, "Galaxy S26 Ultra", 30000000, "Smartphones"),
    new Product(3, "Balo ROG BP1500", 500000, "Backpacks"),
    new Product(4, "Lenovo Legion Slim 7i 2023", 30000000, "Laptops"),
    new Product(5, "Asus TUF Dash F15 2022", 18000000, "Laptops"),
];

function printProducts($products)
{
    foreach ($products as $p) {
        echo "  [" . $p->getId() . "] " . $p->getName()
            . " - " . $p->getPrice() . " VND"
            . " (" . $p->getCategory() . ")\n";
    }
}


echo "\n===== DANH SÁCH SẢN PHẨM =====\n";
printProducts($products);


function filterProductsByCategory($products, $category)
{
    $result = [];
    foreach ($products as $product) {
        if (strtolower($product->getCategory()) === strtolower($category)) {
            $result[] = $product;
        }
    }
    return $result;
}

// Hàm filterProductsByCategory($products, $categoryName) để lọc ra các sản phẩm thuộc một danh mục cụ thể.

$categoryName = "Backpacks";
echo "\n===== LỌC THEO DANH MỤC: $categoryName =====\n";
printProducts(filterProductsByCategory($products, $categoryName));

// Hàm applyDiscount($products, $percent) để giảm giá cho tất cả sản phẩm và trả về danh sách mới với giá đã cập nhật.

function applyDiscount($products, $percent)
{
    $result = [];
    foreach ($products as $product) {
        $clone = clone $product;
        $clone->setPrice($product->getPrice() * (1 - $percent / 100));
        $result[] = $clone;
    }
    return $result;
}

$percent = 50;
echo "\n===== SAU KHI GIẢM GIÁ $percent% =====\n";
printProducts(applyDiscount($products, $percent));

echo "\n";
