<?php

namespace App;

session_start();

require_once('vendor/autoload.php');

use Router\Router;
$router = new Router($_GET['url']);

$router->get("/", "App\Controller\AppController@index");

$router->get("/BookA", "App\Controller\BookController@add");
$router->post("/BookA", "App\Controller\BookController@add");

$router->get("/BookM/:id", "App\Controller\BookController@modify");
$router->post("/BookM/:id", "App\Controller\BookController@modify");

$router->get("/CriticA/:id", "App\Controller\CriticController@add");
$router->post("/CriticA/:id", "App\Controller\CriticController@add");

$router->get("/CriticM/:id", "App\Controller\CriticController@modify");
$router->post("/CriticM/:id", "App\Controller\CriticController@modify");

$router->run();