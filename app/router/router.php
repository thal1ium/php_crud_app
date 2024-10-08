<?php

$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

$router = [
  '/' => 'app/controllers/homeController.php',
  '/about' => 'app/controllers/aboutController.php',
  '/edit' => 'app/controllers/editController.php',  
];

if (array_key_exists($uri, $router)) {
  require $router[$uri];
} else {
  require 'app/views/404.php';
}