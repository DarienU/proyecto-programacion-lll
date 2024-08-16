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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Servicio</title>
    <link href="https://cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="../Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>

<body>
    <?php include '../modulos/HeaderAdmin.php'; ?>

    <div class="contenedorAgregarServicio container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="edit-profile-card">
                    <div class="edit-profile-header">
                        <h2 class="tituloCar0 text-center">Agregar Nuevo Servicio</h2>
                    </div>
                    <div class="edit-profile-body">
                        <form action="/Proyecto-Programacion-III/Proyecto/Back/crearServicio.php" method="post">
                            <div class="mb-3">
                                <label for="codigo" class="form-label etiquetasPerfil">Código</label>
                                <input type="text" class="form-control edit-profile-input" id="codigo" name="codigo"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="nombre" class="form-label etiquetasPerfil">Nombre</label>
                                <input type="text" class="form-control edit-profile-input" id="nombre" name="nombre"
                                    required>
                            </div>
                            <div class="mb-3">
                                <label for="especialidad" class="form-label etiquetasPerfil">Especialidad</label>
                                <input type="text" class="form-control edit-profile-input" id="especialidad"
                                    name="especialidad" required>
                            </div>
                            <div class="mb-3">
                                <label for="enfermera_a_cargo" class="form-label etiquetasPerfil">Enfermera a
                                    Cargo</label>
                                <input type="text" class="form-control edit-profile-input" id="enfermera_a_cargo"
                                    name="enfermera_a_cargo" required>
                            </div>
                            <div class="mb-3">
                                <label for="costo" class="form-label etiquetasPerfil">Costo</label>
                                <input type="number" step="0.01" class="form-control edit-profile-input" id="costo"
                                    name="costo" required>
                            </div>
                            <div class="d-flex justify-content-start">
                                <button type="submit" class="btn edit-profile-submit-btn">Agregar Servicio</button>
                                <a href="vistaServicios.php" class="btn btn-secondary edit-profile-reset-btn">Volver</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"></script>
</body>

</html>