<?php
$servername = "localhost";
$username = "root";
$password="";
$bdname ="suscripcion";

$conn = new mysqli($servername, $username, $password, $bdname);

if ($conn->connect_error){
    die("conexion fallida ". $conn->connect_error);
}

$nombre= $_POST['nombre'];
$email=$_POST['email'];

$sql = "INSERT INTO suscripcion(
    nombre, 
    email
)

VALUES(
    '$nombre',
    '$email'
)";

if ($conn-> query($sql)){
    echo "registro exitoso";
} else{
    echo "error al registrar " .$conn->error;
}
?>