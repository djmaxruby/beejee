<?php
ini_set("display_errors",1);
error_reporting(E_ALL);

require_once "../app/DB.php";
require_once "../app/Model.php";
require_once "../app/View.php";
require_once "../app/Controller.php";
require_once "../app/Route.php";

require_once "../models/Schedule.php";

$route = new Route();
$route->run();

