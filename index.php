<?php

$database = require 'core/bootstrap.php';
$router = new Router;

require 'routes.php';


var_dump(trim($_SERVER['REQUEST_URI'], '/'));

require $router->direct('about');
