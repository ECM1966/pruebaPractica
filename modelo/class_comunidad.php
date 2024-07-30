<?php
// modelo/class_comunidad.php
require_once 'class_conexion.php';

class Comunidad {
    private $pdo;

    public function __construct() {
        $this->pdo = Conexion::getInstancia()->getConexion();
    }

    // Método para insertar una nueva comunidad
    public function insertComunidad($nombre, $direccion, $poblacion, $id_administrador) {
        $sql = "INSERT INTO Comunidades (Nombre, Direccion, Poblacion, id_administrador) VALUES (:nombre, :direccion, :poblacion, :id_administrador)";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([
            'nombre' => htmlspecialchars($nombre, ENT_QUOTES, 'UTF-8'),
            'direccion' => htmlspecialchars($direccion, ENT_QUOTES, 'UTF-8'),
            'poblacion' => htmlspecialchars($poblacion, ENT_QUOTES, 'UTF-8'),
            'id_administrador' => $id_administrador
        ]);
    }
}
?>
