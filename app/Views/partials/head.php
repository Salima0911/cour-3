<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <?php if (isset($style)){
        '<link rel="stylesheet"'.' href="'.$style.'">';
    } ?>

    <title>
        
        <?php 
        //  si la variable title existe alors on affiche le contenue
         if (isset($title)){
            echo $title;
        } ?>
        Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand mt-2 mt-lg-0" href="/">
                <img src="public/img/logo.png" height="60" alt="">
            </a>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
                <li class="nav-item">
                    <a class="nav-link" href="/" >Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="mentions-legales" >Mentions légales</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product-create" >Product create</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product" >Product list</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login" >Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register" >inscription</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="admin" >admin</a>
                </li>
            </ul>
        </div>
    </nav>