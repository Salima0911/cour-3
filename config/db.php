<?php // je me connecete  a la base de donnee
try{
    $mysqlClient= new PDO('mysql:host=localhost;dbname=plante-et-co;charset=utf8','root');

}catch(Exception $e){
    die('ERREUR : ' . $e ->getMessage());

    

} ?>