<?php
require_once 'Conexion.php';
$pdo = new Conexion();
$IdEmpleado = 8;
$Nombre = "Luis";
$Email = "noseddd1@nose.com";
$Telefono = "2233";

$sentencia = $pdo->prepare("INSERT INTO empleados (idEmpleado, 
    Nombre, Email, Telefono) VALUES (:IdEmpleado, :Nombre, :Email, :Telefono)");
$sentencia->bindParam(':IdEmpleado', $IdEmpleado);
$sentencia->bindParam(':Nombre', $Nombre);
$sentencia->bindParam(':Email', $Email);
$sentencia->bindParam(':Telefono', $Telefono);

try {
    $sentencia->execute();    
    echo "Se ingresaron los datos correctamente";
} catch (Exception $e) {
    echo "Error insertando datos. Error:" . $e;
}