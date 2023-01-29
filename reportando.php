<?php
session_start();

include('conexion.php');

if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['motivoReporte'])
    && isset($_POST['explicacion'])) {
    function validar($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }

    $nombre = validar($_POST['nombre']);
    $apellido = validar($_POST['apellido']);
    $cedula = validar($_POST['cedula']);
    $ciudad = validar($_POST['ciudad']);
    $direccion = validar($_POST['direccion']);
    $motivoReporte = validar($_POST['motivoReporte']);
    $explicacion = validar($_POST['explicacion']);
    $infRelevante = validar($_POST['infRelevante']);

    $datos = 'nombre=' . $nombre . '&apellido=' . $apellido . '&cedula=' . $cedula . '&ciudad=' . $ciudad . '&direccion=' . $direccion . '&motivoReporte=' . $motivoReporte . '&explicacion=' . $explicacion . '&infRelevante=' . $infRelevante;

    if (!is_numeric($cedula)) {
        header("location: reporte.php?error=La cedula no puede tener caracteres especiales&$datos");
        exit();
    }

    $sql = "INSERT INTO reporte(nombre, apellido, cedula, ciudad, direccion, motivo_reporte, explicacion, informacion) VALUES ('$nombre','$apellido','$cedula','$ciudad','$direccion','$motivoReporte','$explicacion','$infRelevante')";
    $query = $conexion->query($sql);

    if ($query) {
        header("location: exitoso.php");
        exit();
    } else {
        header("location: reporte.php?error=Error al guardar la información&$datos");
        exit();
    }

} else {
    header("location: reporte.php");
    exit();
}