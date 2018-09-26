<?php
$id=$_POST['Id'];
$nombre=$_POST['Name'];
$apellido=$_POST['LastName'];

include('conexion.php');

$query=mysqli_query($conecta,"INSERT INTO user VALUES ('$id', '$nombre','$apellido')");
mysqli_close($conecta);

if($query){
	echo ('Dato Insertado');
	header("Refresh:1; URL=http://localhost/tics17a/GetAllUsers.php");
}

?>