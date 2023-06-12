<?php 
include 'conexion.php';

$titulo=$_POST['titulo'];
$iniciouno=$_POST['periodoinicio'];
$finuno=$_POST['periodofin'];


//variable para conexioon

$sql="INSERT INTO formacion_educativa (titulo,periodo_inicio,periodo_termino) 
VALUES ('$titulo','$iniciouno','$finuno')";

if(mysqli_query($conn,$sql))

{

    //echo"Se guardaron los datos satisfactoriamente inteta iniciar secion" ;

    header("location:vacante.html");

}

else{

    echo"Lo sentimos, no se realizo la operacion".$sql.mysqli_error($conn);

}
// Obtener el valor del nombre buscado desde el formulario
$nombre = $_POST['nombre'];

$conn->set_charset("utf8mb4"); // Establecer el conjunto de caracteres adecuado

// Realizar la consulta
$sql = "SELECT * FROM universidad WHERE nombre COLLATE utf8mb4_general_ci LIKE '%$nombre%'";
$result = $conn->query($sql);

// Mostrar los resultados en una tabla
if ($result->num_rows > 0) {
    echo "<table>";
    echo "<tr><th>Nombre</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row['nombre'] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "No se encontraron resultados.";
}

$conn->close();
?>