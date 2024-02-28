<?php

require_once(__DIR__ . '/../../config/db.php');

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])) {
    // je recupere les elements du formulaire
    //on met  les information du formulaire dans des variable
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
// -----------------------------------------------------


// verification de la validité  de l'eamil puis de la presence de l'email en bdd
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        require_once(__DIR__.'/../Views/register.view.php');
        exit;
    }


    // je creer mon utilisateur en base de donnee et je les met dans la variable user
    $userQuery = "SELECT * FROM user WHERE email = :email";
    $userStatement = $mysqlClient->prepare($userQuery);
    //je prend uniquement  email 
    $userStatement->bindParam(':email', $email);
    //  j'execute la requete 
    $userStatement->execute();

    // quand l'element est unique on utilise fetch et non fechtALL
    $user = $userStatement->fetch();
// -----------------------------------------------------------------------------
//verification de  la validite de l'mail puis de la prescene de l'email  en bdd
    if ($user) {

        $error = "Email deja existant";
    } else {

        $passwordValid = preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/", $password);

        if ($passwordValid) {
            $userQuery = "INSERT INTO user (name,email,password) VALUES ( :name, :email, :password)";

            //ke prepare  ma requete sql a l'envoie
            $userStatement = $mysqlClient->prepare($userQuery);
            // je modifie les valeurs de ma requete en fonction du formulire
            $userStatement->bindParam(':name', $name);
            $userStatement->bindParam(':email', $email);
            $userStatement->bindParam(':password', $password);
            // j'execute la requete  
            $userStatement->execute();
            // je redirige l'utilisateur vers la page d'inscription t
            header('Location: /login');
            exit();
        } else {
            $error = "- at least 8 characters
        - at least one character in uppercase 
        - at lest one character in lowercase
        - at least one digit
        - at least one special character <br>";
        }
    }
}

require_once(__DIR__ . '/../Views/register.view.php');
