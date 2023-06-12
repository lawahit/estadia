<?php
include 'conexion.php';

$rfc = $_POST['rfc'];
$curp = $_POST['curp'];
$nss = $_POST['nss'];



$sql="INSERT INTO detalle (RFC,CURP,NSS) VALUES ('$rfc','$curp','$nss')";

if(mysqli_query($conn,$sql))

{

    //echo"Se guardaron los datos satisfactoriamente inteta iniciar secion" ;

    header("location:experiencia_laboral.html");

}

else{

    echo"Lo sentimos, no se realizo la operacion".$sql.mysqli_error($conn);

}

?>
