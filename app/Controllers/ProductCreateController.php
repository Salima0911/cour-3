<?php 

require_once(__DIR__ . '/../../config/db.php');

if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['price']) && $_POST['price'] > 0 && strlen($_POST['title']) > 2) {
    // je recupere les elements du formulaire
    $title= $_POST['title'];
    $description = $_POST['description'];
    $price = $_POST['price'];

    // je creer ma requte sql 
    $productQuery = "INSERT INTO product (title, description, price) VALUES (:title, :description, :price)";
    // je prepare ma requete sql a l'envoie

    // je modifie les valeurs de ma requete en fonction des valeurs du formulaire 
    $productStatement = $mysqlClient->prepare($productQuery);
    $productStatement->bindParam(':title', $title);
    $productStatement->bindParam(':description', $description);
    $productStatement->bindParam(':price', $price);
    
    // j'execute la requete 
    $productStatement->execute();

    // je redirige l'utilisateur vers la page product pour qu'il vois le nouveau produit
    header('Location: /product');
    exit();

}else{
    echo "erreur";
}

require_once(__DIR__ . '/../Views/productCreate.view.php');
?>