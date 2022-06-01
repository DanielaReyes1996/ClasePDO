<?php
require_once 'Conexion.php';
$pdo = new Conexion();

$idEmpleado = $_POST['idEmpleado'];
$Nombre = $_POST['Nombre'];
$Email = $_POST['Email'];
$Telefono = $_POST['Telefono'];

try {
    $sentencia = $pdo->prepare("UPDATE empleados SET nombre =:nombre, email=:email,
                                telefono=:telefono WHERE idEmpleado=:idEmpleado");
    $sentencia->bindParam(':idEmpleado', $idEmpleado);
    $sentencia->bindParam(':nombre', $Nombre);
    $sentencia->bindParam(':email', $Email);
    $sentencia->bindParam(':telefono', $Telefono);
    $sentencia->execute();
    echo "Actualizado";
    header('Location: listarEmpleados.php');

}catch (PDOException $e){
    echo 'Error: '. $e->getMessage();
}
