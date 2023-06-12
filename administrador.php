<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Tabla de Candidatos</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
</head>

<body>
  <header>
    <div class="p text-bg-dark border-bottom">
      <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
          <img src="assents/logo.png.jpg"
            class="d-flex align-items-center my-2 my-lg-0 me-lg-auto bg-dark text-decoration-none" style="height: 7rem">

          <img>
          <div>
              <h1>Administrador</h1>
            </div>
          <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
           

            <li>
              <a href="datos.php" class="nav-link text-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-list"
                  viewBox="0 0 16 16">
                  <path
                    d="M3 11.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5Zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5Zm0-4a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5Zm-2-4a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5Z" />
                </svg>
                Ver
              </a>
            </li>


            <li>
              <a href="logeo.html" class="nav-link text-secondary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                  class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                  <path fill-rule="evenodd"
                    d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0v-2z" />
                  <path fill-rule="evenodd"
                    d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z" />
                </svg>
                Carrar sesion
              </a>
            </li>

          </ul>
        </div>
      </div>
    </div>
  </header>
  <div class="card">
    <div class="card-header">
      Tu Registro
    </div>
    <div class="p-4">
      <table class="table align-middle">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido Materno</th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Correo Electrónico</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Dirección</th>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Apellido Materno</th>
            <th scope="col">Apellido Paterno</th>
            <th scope="col">Correo Electrónico</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Dirección</th>
            <th scope="col" colspan="2">Opciones</th>

            
          </tr>
        </thead>
        <tbody>
          <?php
          include 'conexion.php';
          $sentencia = "SELECT * FROM candidato";
          $resultado = $conn->query($sentencia);

          if ($resultado->num_rows > 0) {
            while ($row = $resultado->fetch_assoc()) {
              ?>
              <tr>
                <td>
                  <?php echo $row["id"]; ?>
                </td>
                <td>
                  <?php echo $row["nombre"]; ?>
                </td>
                <td>
                  <?php echo $row["apepat"]; ?>
                </td>
                <td>
                  <?php echo $row["apemat"]; ?>
                </td>
                <td>
                  <?php echo $row["email"]; ?>
                </td>
                <td>
                  <?php echo $row["tel"]; ?>
                </td>
                <td>
                  <?php echo $row["direccion"]; ?>
                </td>
                <td>
                  <a href="editar.php?id=<?php echo $row["id"]; ?>" class="text-warning">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                          class="bi bi-pencil-square" viewBox="0 0 16 16">
                          <path
                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                          <path fill-rule="evenodd"
                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                        </svg>
                  </a>
                </td>
                <td>
                  <a onclick="return confirm('¿Estás seguro de eliminar?');"
                    href="eliminar.php?id=<?php echo $row["id"]; ?>" class="text-danger">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                          fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                          <path
                            d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
                        </svg>
                  </a>
                </td>
              </tr>
              <?php
            }
          } else {
            echo "<tr><td colspan='8'>No hay candidatos registrados</td></tr>";
          }
          ?>
        </tbody>
      </table>
    </div>
  </div>
  </div>
  </div>
</body>

</html>