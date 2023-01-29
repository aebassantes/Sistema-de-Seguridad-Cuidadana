<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styler.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity=
    "sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
          crossorigin="anonymous"
          referrerpolicy="no-referrer"/>
    <title>Reporte</title>
</head>
<body>
<div class="contenedor">
    <h1>
        <ins>Reporte</ins>
    </h1>
    <br>
    <form action="reportando.php" method="POST">
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"> <?php echo $_GET['error']; ?></p>
        <?php } ?>
        <br>
        <?php if (isset($_GET['success'])) { ?>
            <p class="success"> <?php echo $_GET['success']; ?></p>
        <?php } ?>
        <br>
        <label for="nombre">
            Nombre
        </label>
        <input id="nombre" type="text" name="nombre" autocomplete="off" required value="<?php echo $_GET['nombre']; ?>">

        <label for="apellido">
            Apellido
        </label>
        <input id="apellido" type="text" name="apellido" autocomplete="off" required value="<?php echo $_GET['apellido']; ?>">

        <label for="cedula">
            Cédula
        </label>
        <input id="cedula" type="text" name="cedula" autocomplete="off" value="<?php echo $_GET['cedula']; ?>">

        <label for="ciudad">
            Ciudad
        </label>
        <input id="ciudad" type="text" name="ciudad" autocomplete="off" required value="<?php echo $_GET['ciudad']; ?>">

        <label for="direccion">
            Dirección
        </label>
        <input id="direccion" type="text" name="direccion" autocomplete="off" required value="<?php echo $_GET['direccion']; ?>">

        <label for="motivoReporte">
            Motivo reporte
        </label>
        <input id="motivoReporte" type="text" name="motivoReporte" autocomplete="off" required
               value="<?php echo $_GET['motivoReporte']; ?>">

        <label for="explicacion">
            Explicación
        </label>
        <textarea id="explicacion" name="explicacion" autocomplete="off" required rows="4"
                  cols="50"><?php echo $_GET['explicacion']; ?></textarea>

        <label for="infRelevante">
            Información relevante
        </label>
        <textarea id="infRelevante" name="infRelevante" autocomplete="off" required rows="4"
                  cols="50"><?php echo $_GET['infRelevante']; ?></textarea>

        <input type="submit" class="button" value="Guardar">

    </form>
</div>
</body>
</html>