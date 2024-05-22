<?php


ini_set('display_errors', 1);
error_reporting(E_ALL);

// require_once 'config/config.php';


// 1. Validar la existencia del parametro 'controller'
// ...

// $_GET = [
//     'controller' => 'users',
//     'action' => 'list'
// ];

$nameController = ucfirst($_GET['controller']) .'Controller'; 


$pathController = 'controllers/' . $nameController . '.php';


// 2. Validar la existencia del archivo
// ...

// 3. Validar la existencia del parámetro 'action'
// ..
$action = $_GET['action'];

require_once $pathController;

$controller = new $nameController();
$controller->$action();