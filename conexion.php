<?php 
$servername = "localhost";
$database = "bolsa_trabajo";
$username = "root";
$password = "";


$conn=mysqli_connect($servername, $username, $password, $database);

//verificamos la conexion

if(!$conn)

{

    die("Lo sentimos no se establecio la conexion ".mysqli_connect_error());

}
//echo "Conexion exitosa ";


?>