<?php
    session_start();

    include('conexion.php');

if (isset($_POST['nombre']) && isset($_POST['apellido']) && isset($_POST['usuario'])
 && isset($_POST['contraseña']) && isset($_POST['RContraseña'])) {
    function validar($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }


    $nombre =  validar($_POST['nombre']);
    $apellido =  validar($_POST['apellido']);
    $usuario =  validar($_POST['usuario']);
    $contraseña =  validar($_POST['contraseña']);
    $RContraseña =  validar($_POST['RContraseña']);

    $usuario_Datos = 'nombre=' . $nombre . '&apellido=' . $apellido . '&usuario=' . $usuario . '&contraseña=' . $contraseña;


    if (empty($nombre)) {
        header("location: registrarse.php?error=El campo nombre está vacío&$usuarios_Datos");
        exit();
    }elseif (empty($apellido)) {
        header("location: registrarse.php?error=El campo apellido está vacío&$usuarios_Datos");
        exit();
    }elseif (empty($usuario)) {
        header("location: registrarse.php?error=El campo usuario está vacío&$usuarios_Datos");
        exit();

    }elseif (empty($contraseña)) {
        header("location: registrarse.php?error=El campo contraseña está vacío&$usuarios_Datos");
        exit();
    }elseif (empty($RContraseña)) {
        header("location: registrarse.php?error=El campo repetir contraseña está vacío&$usuarios_Datos");
        exit();
    }elseif ($contraseña !== $RContraseña) {
        header("location: registrarse.php?error=Las contraseñas no coinciden&$usuarios_Datos");
        exit();
    }else {
        //hashing ado
        $Contraseña = md5($contraseña);

        $sql = "SELECT * FROM usuario WHERE nombre = '$usuario'";
        $query = $conexion->query($sql);

        if (mysqli_num_rows($query) > 0) {
            header("location: registrarse.php?error=El nombre de usuario ya existe&$usuarios_Datos");
            exit();
        }else {
            $sql2 = "INSERT INTO usuario(nombre, apellido, usuario, contraseña) VALUES ('$nombre','$apellido','$usuario','$contraseña')";
            $query2 = $conexion->query($sql2); 

            if ($query2) {
                header("location: registrarse.php?success=Usuario creado con exito!&$usuarios_Datos");     
                exit();
            }else {
                header("location: registrarse.php?error=Error desconocido&$usuarios_Datos");
                exit();
            }
        }
    }

}else {
    header("location: registrarse.php");
    exit();
}