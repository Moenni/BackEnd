<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form method="POST">
        Nro 1: <input type="number" name="nro1">
        <br>
        Nro 2: <input type="number" name="nro2">
        <br>
        <input type="submit">
    </form>
    <br>
    <?php

$nro1 = $_POST["nro1"];
$nro2 = $_POST["nro2"];
echo "La suma de $nro1 y $nro2 es: " . $nro1 + $nro2 . "<br>";
echo "La resta de $nro1 y $nro2 es: " . $nro1 - $nro2 . "<br>";

?>
</body>
</html>
