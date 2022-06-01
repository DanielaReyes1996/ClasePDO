<?php
require_once 'Conexion.php';
$pdo = new Conexion();
$sentencia = $pdo->prepare("SELECT * FROM empleados");
try {
    $sentencia->execute();
    //$listaEmpleados = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    $listaEmpleados = $sentencia->fetchAll();
    //var_dump($listaEmpleados);

?>
    <table>
        <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Email</th>
            <th>Teléfono</th>
        </tr>
        </thead>
        <?php foreach ($listaEmpleados as $empleado){ ?>
            <tr>
                <td><?php echo $empleado->idEmpleado ?></td>
                <td><?php echo $empleado-> nombre?></td>
                <td><?php echo $empleado-> email?></td>
                <td><?php echo $empleado-> telefono?></td>
                <td>
                    <form action="consultarEmpleado.php" method="get">
                        <input type="hidden" name="idEmpleado" value="<?php echo $empleado->idEmpleado ?>">
                        <input type="submit" value="Seleccionar">
                    </form>
                </td>
                <td>
                    <a href="consultarEmpleadoActualizar.php?idEmpleado=<?php echo $empleado->idEmpleado;?>">Actualizar</a>
                </td>
                <td>
                <td>
                    <a href="eliminarEmpleado.php?idEmpleado=<?php echo $empleado->idEmpleado;?>">Eliminar</a>
                </td>
            </tr>
        <?php } ?>
    </table>

    <?php

} catch (Exception $e) {
    echo "Error  datos. Error:" . $e;
}