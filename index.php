<?php
require 'vendor/autoload.php';

use Src\route;

session_start();
include('config.php');
$route = new route();
try {
    $route->index();
} catch (Exception $e) {
}