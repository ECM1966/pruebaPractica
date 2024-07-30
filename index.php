<?php
// index.php

require 'config.php';
require CONTROLADOR_PATH . 'controlador_comunidad.php';

$controller = new ComunidadController();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $controller->addComunidad();
} else {
    $controller->showAddForm();
}
?>
