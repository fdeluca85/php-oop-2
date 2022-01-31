
<?php
class Product
{
    private $nameProduct;
    private $brand;
    private $category;
    private $price;

    public function __construct($_nameProduct, $_brand, $_category, $_price)
    {
        $this->nomeProdotto = $_nameProduct;
        $this->marca = $_brand;
        $this->categoria = $_category;
        $this->prezzo = $_price;
    }
}
