<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKunfTAU6auU8tT94WrHftjDbrCEXSU1oBoqy12QvZ6jIw3" crossorigin="anonymous">
    <link rel="stylesheet" href="styleInicio.css">
    <title>INICIO</title>
</head>
<body>
    <form action = "FuncionBoton.php" method="POST">
        <h1>SISTEMA DE SEGURIDAD CIUDADANA</h1>
        <hr>
        <input type = "submit" name="Reportar" value = "Reporte"> 
        <h2>El botón reporte lo va a llevar a un formato de reportes que tendrá que llenar,
            para luego poder imprimir</h2>    
        <input type = "submit" name="Denunciar" value = "Denuncia">
        <a href="vistas/escritorio.php">Denuncia</a>
        <h2>El botón denuncia lo va a llevar a un formato de denucias que tendrá que llenar,
            para luego poder imprimir</h2>     
    <a href="CerrarSesion.php" class= "btn btn-danger">Cerrar sesion </a>
</body>
</html>