<?php
require('../helpers.php');
require __DIR__ . '/../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$rootDir = $_SERVER['ROOT'];
$uri = $_SERVER['REQUEST_URI'];

$routes = [
    "$rootDir/" => "controllers/home.php",
    "$rootDir/listings" => "controllers/listings/index.php",
    "$rootDir/listings/create" => "controllers/listings/create.php",
    "$rootDir/404" => "controllers/error/404.php",
];

if (array_key_exists($uri, $routes)) {
    require getBasePath($routes[$uri]);
} else {
    require getBasePath($routes['404']);
}
