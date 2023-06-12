<?php 
include 'conexion.php';

$emuno=$_POST['1'];
$iniciouno=$_POST['2'];
$finuno=$_POST['3'];
$actividaduno=$_POST['4'];
$salariouno=$_POST['5'];
$emdos=$_POST['6'];
$iniciodos=$_POST['7'];
$findos=$_POST['8'];
$actividaddos=$_POST['9'];

//variable para conexioon

$sql="INSERT INTO vacante (fecha,nombre,descripcion,empleo_uno,periodo_empleo_uno,actividad_empleo_uno,empleo_dos,periodo_empleo_dos,actividad_empleo_dos) 
VALUES ('$emuno','$iniciouno','$finuno','$actividaduno','$salariouno','$emdos','$iniciodos','$findos','$actividaddos')";

if(mysqli_query($conn,$sql))

{

    //echo"Se guardaron los datos satisfactoriamente inteta iniciar secion" ;

    header("location:datos.php");

}

else{

    echo"Lo sentimos, no se realizo la operacion".$sql.mysqli_error($conn);

}



?>