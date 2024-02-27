<?php 

require_once(__DIR__. '/../../config/db.php');
//  j'exris ma requete sql que je met dans une variable
$productQuery = " SELECT *FROM product";

// puis je prepare  ma requete
$productStatement = $mysqlClient->prepare($productQuery);
//  j'execute la requete
$productStatement-> execute();
//  je recuperer le resultat de la requete dans une variable
$products = $productStatement -> fetchAll();

// echo '<pre>';
// var_dump($products);
// echo '</pre>';




require_once(__DIR__.'/../Views/product.view.php');
?>