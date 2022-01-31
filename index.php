<?php
require_once __DIR__ . '/classes/product.php';
require_once __DIR__ . '/classes/user.php';

// prodotti in vendita
$products = [
    new Product("iPad 2020", "Apple", "Tablet", 499),
    new Product("Apple Pencil", "Apple", "Accessories", 132),
    new Product("MacBook Air 2020", "Apple", "Notebook", 999),
    new Product("Fire HD 10", "Amazon", "Tablet", 150),
    new Product("Kindle Paperwhite", "Amazon", "Tablet", 140),
    new Product("Kindle Paperwhite Custodia", "Amazon", "Accessories", 30),

];
// var_dump($products);

// acquirenti
$sonia = new User("Sonia", "Viola", "viola_so@gmail.com");
// var_dump($sonia);
$mario = new User("Mario", "Rossi", "ross-mario@gmail.com");
// var_dump($mario);
$luca = new User("Luca", "Gialli", "lucag@gmail.com");
// var_dump($luca);
$chiara = new User("Chiara", "Verdi", "verdi_chiara@gmail.com");
// var_dump($chiara);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP Shop online</title>
</head>

<body>

    <h1>Shop Online</h1>
    <ul>
        <?php foreach ($products as $product) { ?>
            <li>
                <h3><?php echo $product->getNameProduct(); ?></h3>
                <p>Marca: <?php echo $product->getBrand(); ?></p>
                <p>Categoria: <?php echo $product->getCategory(); ?></p>
                <p>Prezzo: <?php echo $product->getPrice(); ?> €</p>
            </li>
        <?php } ?>
    </ul>


</body>

</html>