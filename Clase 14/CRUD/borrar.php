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

$stmt = $dbh->prepare("DELETE FROM productos WHERE id=:id");



// Bind
$id = $_POST['id'];

$stmt->bindValue(':id', $id); // Se enlaza al valor Morgan

//Execute
$stmt->execute(); // Se insertará el cliente con el nombre Morgan 

header("Location:index.php");
