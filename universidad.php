<?php
$servername = "localhost";
$database = "bolsa_trabajo";
$username = "root";
$password = "";

// Crear la conexión a la base de datos
$conn = new mysqli($servername, $username, $password, $database);
// Verificar la conexión
if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

// Ejecutar la consulta SQL para obtener los datos de la tabla "universidades"
$sql = "SELECT id, nombre FROM universidad";
$result = $conn->query($sql);

// Generar las filas de la tabla dinámicamente con los datos obtenidos de la base de datos
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "</tr>";
    }
}

// Cerrar la conexión a la base de datos
$conn->close();

?>
