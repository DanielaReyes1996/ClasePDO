<?php
require_once 'Conexion.php';
$pdo = new Conexion();
$idEmpleado = $_GET['idEmpleado'];
//echo $idEmpleado;
try {
    $sentencia = $pdo->prepare("DELETE FROM empleados WHERE idEmpleado=:idEmpleado");
    $sentencia->bindParam(':idEmpleado', $idEmpleado);
    $sentencia->execute();
    echo "Eliminado";
    header('Location: listarEmpleados.php');

}catch (PDOException $e){
    echo 'Error: '. $e->getMessage();
}