<?php

function randomString($n)
{
    $characters = '0123456789abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWZ';
  $str = '';
  for($i=0;$i<$n;$i++){
    $index = rand(0, strlen($characters) - 1);
    $str = $str . $characters[$index];
  }
  return $str;
}




//CONEXION A BASE DE DATOS
if(count($_POST)>0){ //if($_SERVER['REQUEST_METHOD']=='POST')
 
 /* echo "<pre>";
print_r($_FILES);  
echo "</pre>";
  exit;
*/
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
/*
$statement = $dbh->prepare('SELECT * FROM productos ORDER BY fecha_creacion');
$statement->execute();
$productos = $statement->fetchAll();

echo "<pre>";
print_r($productos);
echo "</pre>";
*/

// Prepare:

$stmt = $dbh->prepare("INSERT INTO productos (imagen, nombre, descripcion,precio)                 VALUES (:imagen,:nombre,:descripcion,:precio)");



// Bind
//$imagen = $_POST['imagen'];
$nombre = $_POST['nombre']; 
$descripcion = $_POST['descripcion'];
$precio = $_POST['precio'];


  $imagen = $_FILES['imagen'] ?? null;

if($imagen){
  if(!is_dir('imagenes')) //en el caso que no exista el directorio lo creo
    mkdir('imagenes'); //crear directorio imagenes
   
    $ruta_imagen ='imagenes/'. randomString(8).'/'.$imagen['name']; // creando una ruta ficticia
    mkdir(dirname($ruta_imagen));//crear el directorio de la ruta ficticia
    move_uploaded_file($imagen['tmp_name'], $ruta_imagen );//muevo el archivo imagen temporal al directorio 
}

 // exit;

$stmt->bindValue(':imagen', $ruta_imagen); // Se enlaza al valor imagen
$stmt->bindValue(':nombre', $nombre); // Se enlaza al valor nombre
$stmt->bindValue(':descripcion', $descripcion); // Se enlaza al valor descripcion
$stmt->bindValue(':precio', $precio); // Se enlaza al valor precio

//Execute
$stmt->execute(); // Se insertará el cliente con el nombre Morgan 

header("Location:index.php"); //nos redirecciona al index.php

 }

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
<div class="mb-3">
    <label for="imagen" class="form-label">Imagen del producto</label>
    <input class="form-control" type="file" id="imagen" name="imagen">
</div>
  <div class="mb-3">
    <label for="nombre" class="form-label">Nombre del producto</label>
    <input type="text" class="form-control" id="nombre" name="nombre">

    <div class="mb-3">
  <label for="descripcion" class="form-label"> Descripcion del producto</label>
  <textarea class="form-control" id="descripcion" rows="3" name="descripcion"></textarea>
</div>
  </div>
  <div class="mb-3">
    <label for="precio" class="form-label">Precio del producto</label>
    <input type="number" class="form-control" id="precio" name="precio">
  </div>
 
  <button type="submit" class="btn btn-primary">Enviar</button>
</form>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>