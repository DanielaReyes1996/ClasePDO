<?php
require_once 'Conexion.php';
$idEmpleado = $_GET["idEmpleado"];
$pdo = new Conexion();
$sentencia = $pdo->prepare("SELECT * FROM empleados WHERE IdEmpleado = :idEmpleado");
$sentencia->bindParam('idEmpleado',$idEmpleado);
$sentencia->execute();
$Empleado = $sentencia->fetch();
//var_dump($Empleado);
//echo $Empleado->Nombre;
?>
<form>
    <label for="Nombre">Nombre:</label>
    <input type="text" name="Nombre" id="Nombre" value="<?php echo $Empleado->Nombre ?>">
    <br><br>
    <label for="Email">Email:</label>
    <input type="text" name="Email" id="Email" value="<?php echo $Empleado->Email ?>">
    <br><br>
    <label for="Telefono">Nombre:</label>
    <input type="text" name="Telefono" id="Telefono" value="<?php echo $Empleado->Telefono ?>">
    
    <br><br><br>
    <button type="button" onclick="history.back()">Volver</button>
</form>

