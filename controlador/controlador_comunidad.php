<?php
// controlador/controlador_comunidad.php
require_once MODELO_PATH . 'class_comunidad.php';

class ComunidadController {
    private $comunidadModel;

    public function __construct() {
        $this->comunidadModel = new Comunidad();
    }

    // Método para mostrar el formulario de añadir una comunidad
    public function showAddForm() {
        require VISTA_PATH . 'comunidad/crear_comunidad.php';
    }

    // Método para manejar la solicitud de añadir una comunidad
    public function addComunidad() {
        // Recoger y sanitizar los datos del formulario
        $nombre = htmlspecialchars($_POST['nombre'], ENT_QUOTES, 'UTF-8');
        $direccion = htmlspecialchars($_POST['direccion'], ENT_QUOTES, 'UTF-8');
        $poblacion = htmlspecialchars($_POST['poblacion'], ENT_QUOTES, 'UTF-8');
        $id_administrador = htmlspecialchars($_POST['id_administrador'], ENT_QUOTES, 'UTF-8');
        
        // Validar los datos
        if (!empty($nombre) && !empty($direccion) && !empty($poblacion) && !empty($id_administrador)) {
            // Insertar la comunidad
            $this->comunidadModel->insertComunidad($nombre, $direccion, $poblacion, $id_administrador);
            echo "Comunidad añadida exitosamente.";
        } else {
            echo "Todos los campos son obligatorios.";
        }
    }
}
?>
