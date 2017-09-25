<?php
ini_set("display_errors",1);
error_reporting(E_ALL);

require_once "../app/View.php";
require_once "../app/Controller.php";
require_once "../app/Route.php";

$route = new Route();
$route->run();
