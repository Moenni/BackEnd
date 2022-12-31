<?php
//CONEXION A BASE DE DATOS
$dbname = 'crud_productos';
$user = 'root';
$password = '';
try {

    $dsn = "mysql:host=localhost;dbname=$dbname";

    $dbh = new PDO($dsn, $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 

} catch (PDOException $e){

    echo $e->getMessage();

}
//TRAIGO LOS DATOS DE LAS TABLAS AL PHP
$statement = $dbh->prepare('SELECT * FROM productos ORDER BY fecha_creacion');
$statement->execute();
$productos = $statement->fetchAll();
/*
echo "<pre>";
print_r($productos);
echo "</pre>";
*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de productos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="CRUD/css/style.css">

</head>
<body>
<h1>Crud de productos</h1>
<a href="crear.php">
<button type="button" class="btn btn-success">Crear Producto</button>
</a>


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">imagen</th>
      <th scope="col">nombre</th>
      <th scope="col">precio</th>
      <th scope="col">descripcion</th>
      <th scope="col">fecha_creacion</th>

    </tr>
  </thead>
  <tbody>
    <?php foreach($productos as $i=> $producto){?>
    <tr>
      <th scope="row">
        <?php echo $i?>
      </th>
      <td><?php echo $producto['imagen']?></td>
      <td><?php echo $producto['nombre']?></td>
      <td><?php echo $producto['precio']?></td>
      <td><?php echo $producto['descripcion']?></td>
      <td><?php echo $producto['fecha_creacion']?></td>
      <td>
        <form method="post" action="actualizar.php">
        <input type="hidden" name="id" value="<?=$producto['id']?> "/>
        <button type="button" class="btn btn-primary">Editar</button>
        </form>
        <form method="post" action="borrar.php">
        <input type="hidden" name="id" value="<?=$producto['id'] ?>" />
        <button type="submit" class="btn btn-danger">Borrar</button>
        </form>
    </td>
    </tr>
        <?php } ?>  
      </tbody>
</table>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>
</html>