<?php

// 1- se connceter  a la bdd
require_once(__DIR__ . '/../../config/db.php');

// on a recuperer id de utilsateur 
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // cree une requete
    $productQuery = "SELECT * FROM product WHERE id = :id";
    //  3 - preparation de requete
    // on la afficher dans les input 

    $productStatement = $mysqlClient->prepare($productQuery);
    $productStatement->bindParam(':id', $id);
    $productStatement->execute();
    $product = $productStatement->fetch();


    // recuper les informtion d'un formulaire 
    if (isset($_POST['title']) && isset($_POST['description']) && isset($_POST['price']) && $_POST['price'] > 0 && strlen($_POST['title']) > 2) {
        // je recupere les elements du formulaire
        $title = $_POST['title'];
        $description = $_POST['description'];
        $price = $_POST['price'];


        $updateQuery = "UPDATE product SET title = :title, description = :description, price=:price WHERE id= :id";

        $updateStatement = $mysqlClient->prepare($updateQuery);
        $updateStatement->bindParam(':title', $title);
        $updateStatement->bindParam(':description', $description);
        $updateStatement->bindParam(':price', $price);
        $updateStatement->bindParam(':id', $id);
        $productStatement->execute();





        http_response_code(303);
        header('Location : /product');
        exit();
    }
}



require_once(__DIR__ . "/../views/productupdate.view.php");

 // 2- une requete sql 
 //  3 - preparation de requete
// 4 - on va chercher le produit en bdd (execution)

// 5 - dans le formulaire les input seront  preremplis



//6- ajout des nouvelle information a la base de donner
 //7 - une requete sql
 // 8 - preparation de requete







// 9-  redirection a la fin
