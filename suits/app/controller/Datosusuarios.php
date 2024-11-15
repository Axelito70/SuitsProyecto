<?php
session_start();
require_once '../config/conexion.php';

class Datos extends Conexion {
    
    public function obtener_usuario() {
        if (isset($_SESSION['usuario'])) {
            $usuario = $_SESSION['usuario']['usuario']; 
            $consulta = $this->obtener_conexion()->prepare("SELECT nombre, apellido, usuario FROM t_usuario WHERE usuario = :usuario");
            $consulta->bindParam(":usuario", $usuario);
            $consulta->execute();
            $datos = $consulta->fetch(PDO::FETCH_ASSOC);
            echo json_encode($datos);
        } else {
            echo json_encode(['error' => 'Usuario no autenticado']);
        }
    }

   
    public function actualizar_usuario() {
        if (isset($_SESSION['usuario'])) {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $usuario = $_SESSION['usuario']['usuario'];

            $actualizacion = $this->obtener_conexion()->prepare("UPDATE t_usuario SET nombre = :nombre, apellido = :apellido WHERE usuario = :usuario");
            $actualizacion->bindParam(":nombre", $nombre);
            $actualizacion->bindParam(":apellido", $apellido);
            $actualizacion->bindParam(":usuario", $usuario);

            if ($actualizacion->execute()) {
                echo json_encode([1, "Datos del usuario actualizados con éxito!"]);
            } else {
                echo json_encode([0, "Error al actualizar los datos del usuario!"]);
            }
        } else {
            echo json_encode([0, "Error: usuario no autenticado."]);
        }
    }
}

$consulta = new Datos();
$metodo = $_POST['metodo'];
$consulta->$metodo();