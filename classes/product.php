
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
}
