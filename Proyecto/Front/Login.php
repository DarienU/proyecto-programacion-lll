<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inicio de Sesión</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="Style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
</head>

<body>

    <?php include 'modulos/Header.php'; ?>

    <section class="login py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6">
                    <div class="card cardLogin mx-auto">
                        <div class="card-body cardBodyLogin">
                            <div class="logo-container">
                                <div class="logo">
                                    <img src="../Front/img/Logo-clinica.webp" alt="Logo de la empresa">
                                </div>
                            </div>
                            <form action="../Back/login.php" method="post">
                                <div class="mb-3">
                                    <label class="tituloNombreUsuario" for="usuario" class="form-label">Nombre de
                                        Usuario</label>
                                    <input type="text" class="form-control InputLoginUsuario" id="usuario"
                                        name="usuario" required>
                                </div>
                                <div class="mb-3">
                                    <label class="tituloContra" for="contraseña" class="form-label">Contraseña</label>
                                    <input type="password" class="form-control InputLoginUsuario" id="contraseña"
                                        name="contraseña" required>
                                </div>
                                <button type="submit" class="btn btnLoginUsuario">Iniciar Sesión</button>
                            </form>
                            <div class="mt-3 text-center">
                                <p>No tienes cuenta? <a href="crear_usuario.php">¡Regístrate aquí!</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

    <?php include 'modulos/Footer.php'; ?>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('error')) {
                Swal.fire({
                    icon: 'error',
                    title: 'Error de inicio de sesión',
                    text: 'Nombre de usuario o contraseña incorrectos.'
                });
            }
        });
    </script>
    <script>
        src = "Scripts.js";
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>