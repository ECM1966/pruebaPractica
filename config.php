<?php
// config.php
// Archivo de configuración para la aplicación

// Definir la ruta raíz de la aplicación
define('APP_ROOT', __DIR__);

// Definir rutas para los directorios de MVC
define('CONTROLADOR_PATH', APP_ROOT . '/controlador/');
define('MODELO_PATH', APP_ROOT . '/modelo/');
define('VISTA_PATH', APP_ROOT . '/vista/');

// Incluir el archivo de conexión a la base de datos
require_once MODELO_PATH . 'class_conexion.php';
?>
