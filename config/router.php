<?php
// <!-- fonction qui permet de recuperer juste l'url -->
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => '/HomeController.php',
    '/mentions-legales' => '/MentionController.php',
    //connexion inscription 
    '/login' => '/LoginController.php',
    '/register'=>'/RegisterController.php',

    // admin
    '/admin' => '/AdminController.php',
     '/admin-delete' => '/AdminDeleteController.php',
    // crud produit
     '/product' => '/ProductController.php',  
     '/product-create' => '/ProductCreateController.php',
     '/product-update'=>'ProductUpdateController.php',
     '/product-read' => '/ProductReadController.php',
     '/product-delete' => 'ProductDeleteController.php',    
    
   

];

if (array_key_exists($uri, $routes)) {
    require_once(__DIR__ . "/../app/Controllers/" . $routes[$uri]);
} else {
    http_response_code(404);
    require_once(__DIR__ . '/../app/Controllers/404.php');
}
