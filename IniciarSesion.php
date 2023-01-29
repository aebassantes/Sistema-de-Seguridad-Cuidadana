<?php
session_start();
include('conexion.php');

if(isset($_POST['Usuario']) && isset($_POST['Contraseña'])){
function validate($data){
    $data = trim ($data);
    $data = stripcslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$Usuario = validate ($_POST['Usuario']);
$Contraseña = validate ($_POST['Contraseña']);

if(empty($Usuario)){
    header("Location: index.php?error= El campo Usuario está vacío");
    exit();
}else if (empty($Contraseña)){
    header("Location: index.php?error= El campo Contraseña está vacío");
    exit();
}else{
    
    $sql = "SELECT * FROM usuario WHERE usuario = '$Usuario' AND contraseña = '$Contraseña'";
    $result = mysqli_query($conexion, $sql);

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if($row['usuario'] === $Usuario && $row['contraseña'] === $Contraseña){
            $_SESSION['Usuario'] = $row['Usuario'];
            $_SESSION['Nombre'] = $row['Nombre'];
            $_SESSION['Id'] = $row['Id'];
            header("Location: vistas/escritorio.php");
            exit();
        }else{
            header("Location: index.php?error = El usuario o contraseña están incorrectos");
            exit();
        } 

    }else{
        header("Location: index.php?error = El usuario o contraseña están incorrectos");
        exit();
    }

}
}else{
    header("Location: index.php");
    exit();
    
}