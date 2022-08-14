<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo con POST</title>
</head>
<body>

    <form method="post">
        usuario:
        <br><input type="text" name="usuario"><br>
        contraseña:
        <br><input type="password" name="contrasenia"><br>
        <input type="submit" >
    </form>
    
    <br>
    Tu usuario es: <?php echo $_POST["usuario"]; ?>
    <br>
    Tu contraseña es: <?php echo $_POST["contrasenia"]; ?>
</body>
</html>
