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
    <title>Registrarse</title>
</head>
<body>
<div class="contenedor">
    <h1>
        <ins>Denuncia ciudadana</ins>
    </h1>
    <br>
    <form action="denunciando.php" method="POST">
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"> <?php echo $_GET['error']; ?></p>
        <?php } ?>
        <br>
        <?php if (isset($_GET['success'])) { ?>
            <p class="success"> <?php echo $_GET['success']; ?></p>
        <?php } ?>
        <br>
        <label for="nombreDenunciado">
            Nombre denunciado
        </label>
        <input id="nombreDenunciado" type="text" name="nombreDenunciado" autocomplete="off" required>

        <label for="cedulaDenunciado">
            Cédula denunciado
        </label>
        <input id="cedulaDenunciado" type="text" name="cedulaDenunciado" autocomplete="off">

        <label for="ciudad">
            Ciudad
        </label>
        <input id="ciudad" type="text" name="ciudad" autocomplete="off" required>

        <label for="direccion">
            Dirección
        </label>
        <input id="direccion" type="text" name="direccion" autocomplete="off" required>

        <label for="motivoDenuncia">
            Motivo denuncia
        </label>
        <input id="motivoDenuncia" type="text" name="motivoDenuncia" autocomplete="off" required>

        <label for="explicacion">
            Explicación
        </label>
        <textarea id="explicacion" name="explicacion" autocomplete="off" required rows="4" cols="50"></textarea>

        <label for="infRelevante">
            Información relevante
        </label>
        <textarea id="infRelevante" name="infRelevante" autocomplete="off" required rows="4" cols="50"></textarea>

        <label for="nombreDenunciante">
            Nombre denunciante
        </label>
        <input id="nombreDenunciante" type="text" name="nombreDenunciante" autocomplete="off" required>

        <label for="cedulaDenunciante">
            Cédula denunciante
        </label>
        <input id="cedulaDenunciante" type="text" name="cedulaDenunciante" autocomplete="off" required>

        <label for="correoDenunciante">
            Correo denunciante
        </label>
        <input id="correoDenunciante" type="text" name="correoDenunciante" autocomplete="off" required>

        <input type="submit" class="button" value="Guardar">

    </form>
</div>
</body>
</html>