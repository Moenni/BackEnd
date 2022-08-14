<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo con GET</title>
</head>
<body>

    <form method="get">

        Nombre:
        <br><input type="text" name="nombre"><br>
        Correo:
        <br><input type="email" name="correo"><br>
        Edad:
        <br><input type="number" name="edad"><br>
        <input type="submit" >
    </form>
    <?php
    $_GET["nombre"]=""; 
    $_GET["correo"]="";
    $_GET["edad"]="";
    ?>
    <br>
    Tu nombre es: <?php echo $_GET["nombre"]; ?>
    <br>
    Tu Correo es: <?php echo $_GET["correo"]; ?>
    <br>
    Tu Edad es: <?php echo $_GET["edad"]; ?>
</body>
</html>
