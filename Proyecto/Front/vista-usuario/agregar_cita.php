<?php
session_start();
include 'C:/xampp/htdocs/Proyecto-Programacion-III/Proyecto/Back/db.php';

if (!isset($_SESSION['usuario_cedula'])) {
    die("No se ha iniciado sesión.");
}



?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Agregar Cita</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="../Style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>
    <?php include '../modulos/HeaderUsuario.php' ?>

    <div class="ContenidoFormulario container mt-5">
        <h2 class="tituloAgregarCitas">Agregar Cita</h2>
        <form action="/Proyecto-Programacion-III/Proyecto/Back/agregar_cita.php" method="POST">
            <div class="form-group mb-3">
                <label for="servicio">Servicio:</label>
                <select name="servicio" id="servicio" class="form-select" required>
                    <?php
                    // Conectar a la base de datos
                    include 'C:/xampp/htdocs/Proyecto-Programacion-III/Proyecto/Back/db.php';

                    // Obtener los servicios de la base de datos
                    $sql = "SELECT id, nombre FROM servicios";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Salida de cada fila
                        while ($row = $result->fetch_assoc()) {
                            echo '<option value="' . $row['id'] . '">' . htmlspecialchars($row['nombre']) . '</option>';
                        }
                    } else {
                        echo '<option value="">No hay servicios disponibles</option>';
                    }
                    $conn->close();
                    ?>
                </select>
            </div>
            <div class="form-group mb-3">
                <label for="fecha">Fecha:</label>
                <input type="date" name="fecha" id="fecha" class="form-control" required>
            </div>
            <div class="form-group mb-3">
                <label for="hora">Hora:</label>
                <input type="time" name="hora" id="hora" class="form-control" required>
            </div>
            <button type="submit" class="btnProgramarCita">Programar Cita</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>