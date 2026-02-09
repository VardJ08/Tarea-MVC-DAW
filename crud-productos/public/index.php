<?php
// public/index.php

// Cargar configuración de la base de datos
require_once "../config/database.php";

// Obtener controlador y acción desde la URL
$controller = isset($_GET['controller']) ? $_GET['controller'] : "producto";
$action     = isset($_GET['action']) ? $_GET['action'] : "index";

// Nombre del controlador
$controllerName = ucfirst($controller) . "Controller";
$controllerFile = "../controllers/" . $controllerName . ".php";

// Verificar si existe el controlador
if (!file_exists($controllerFile)) {
    die("Controlador no encontrado");
}

// Cargar controlador
require_once $controllerFile;

// Crear instancia del controlador
$controllerObject = new $controllerName();

// Verificar si existe la acción
if (!method_exists($controllerObject, $action)) {
    die("Acción no encontrada");
}

// Ejecutar acción
$controllerObject->$action();
