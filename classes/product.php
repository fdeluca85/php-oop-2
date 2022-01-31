
<?php
class Product
{
    private $nameProduct;
    private $brand;
    private $category;
    private $price;

    public function __construct($_nameProduct, $_brand, $_category, $_price)
    {
        $this->nameProduct = $_nameProduct;
        $this->brand = $_brand;
        $this->category = $_category;
        $this->price = $_price;
    }

    public function getNameProduct()
    {
        return $this->nameProduct;
    }
    public function getBrand()
    {
        return $this->brand;
    }
    public function getCategory()
    {
        return $this->category;
    }
    public function getPrice()
    {
        return $this->price;
    }
}
