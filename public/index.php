<?php

use App\Request;
use App\Router;
require '../routes.php';
require '../bootstrap.php';

$request = new Request();
$router = new Router($request,$routes);
