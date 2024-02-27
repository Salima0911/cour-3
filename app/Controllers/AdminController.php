<?php 
require_once(__DIR__.'/../../config/db.php');
//  j'exris ma requete sql que je met dans une variable
$userQuery = " SELECT *FROM user";

// puis je prepare  ma requete
$userStatement = $mysqlClient->prepare($userQuery);
//  j'execute la requete
$userStatement-> execute();
//  je recuperer le resultat de la requete dans une variable
$users = $userStatement -> fetchAll();



// echo '<pre>';
// var_dump($users);
// echo '</pre>';

require_once(__DIR__.'/../Views/admin.view.php');
?>