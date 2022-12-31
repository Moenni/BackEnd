<?php
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
// Prepare:

$stmt = $dbh->prepare("SELECT * FROM productos WHERE id=:id");



// Bind
$id = $_POST['id'];

$stmt->bindValue(':id', $id); // Se enlaza al valor

//Execute
$stmt->execute(); // Se selecciona el producto con el id
$producto=$stmt->fetch(PDO::FETCH_ASSOC);//me trae un producto

?>









<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Creación de Productos</title>
    
</head>
<body>
    <h1>Creación de Productos</h1>
    <a href="index.php">
<button type="button" class="btn btn-success">Volver al Indice</button>
</a>
    <form method="POST" action= "crear.php" enctype="multipart/form-data">
    <img src="<?= $producto['imagen']?>" class="thumb-image">

<div class="mb-3">
    <label for="imagen" class="form-label">Imagen del producto</label>
    <input class="form-control" type="file" id="imagen" name="imagen">
</div>
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre del producto</label>
    <input type="text" class="form-control" id="nombre" name="nombre" value="<?= $producto['nombre']?>">

    <div class="mb-3">
  <label for="descripcion" class="form-label"> Descripcion del producto</label>
  <textarea class="form-control" id="descripcion" rows="3" name="descripcion"  ><?= $producto['descripcion']?></textarea>
</div>
  </div>
  <div class="mb-3">
    <label for="precio" class="form-label">Precio del producto</label>
    <input type="number" class="form-control" id="precio" name="precio"  value="<?= $producto['precio']?>">
  </div>
 
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
