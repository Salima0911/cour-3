<?php
// <!-- fonction qui permet de recuperer juste l'url -->
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$routes = [
    '/' => '/HomeController.php',
    '/mentions-legales' => '/MentionController.php',
    '/login' => '/LoginController.php',
    '/product' => '/ProductController.php',
    '/register'=>'/RegisterController.php',
    '/product-create' => '/ProductCreateController.php',
    '/product-read' => '/ProductReadController.php',
    '/admin' => '/AdminController.php',

];

if (array_key_exists($uri, $routes)) {
    require_once(__DIR__ . "/../app/Controllers/" . $routes[$uri]);
} else {
    http_response_code(404);
    require_once(__DIR__ . '/../app/Controllers/404.php');
}
