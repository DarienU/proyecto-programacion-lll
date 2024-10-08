<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Servicios</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="Style.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>

<body>

  <?php include 'modulos/Header.php' ?>

  <section class="PaginaServiciosTotales">
    <div class="container">
      <h2 class="text-center TitituloPaginaServicios">
        Nuestros Servicios Especializados en Atención Médica Integral
      </h2>

      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4" id="services">
        <div class="col">
          <div class="card service-card h-100">
            <img src="img/imgServicios/imgServicio2.jpg" class="card-img-top" alt="General and preventive care" />
            <div class="card-body d-flex flex-column">
              <h5 class="TituloCardServicios">Pediatría</h5>
              <p class="ParrafoCardServicios">
                Cuidamos la salud de los más pequeños con atención integral y
                preventiva para asegurar su desarrollo óptimo.
              </p>
              <a href="servicios/Pediatria.php" class="btn btn-primary mt-auto">Leer Más</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card service-card h-100">
            <img src="img/imgServicios/imgServicioPsiquiatria.jpg" class="card-img-top" alt="Cosmetic solutions" />
            <div class="card-body d-flex flex-column">
              <h5 class="TituloCardServicios">Psiquiatría</h5>
              <p class="ParrafoCardServicios">
                Ofrecemos tratamientos especializados para la salud mental,
                adaptados a las necesidades individuales de cada paciente.
              </p>
              <a href="servicios/Psiquiatria.php" class="btn btn-primary mt-auto">Leer Más</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card service-card h-100">
            <img src="img/imgServicios/imgServicio3.webp" class="card-img-top" alt="Restorative solutions" />
            <div class="card-body d-flex flex-column">
              <h5 class="TituloCardServicios">Ortopedia</h5>
              <p class="ParrafoCardServicios">
                Brindamos soluciones para problemas del sistema
                musculoesquelético, incluyendo tratamientos innovadores y
                rehabilitación.
              </p>
              <a href="servicios/Ortopedia.php" class="btn btn-primary mt-auto">Leer Más</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card service-card h-100">
            <img src="img/imgServicios/imgServicioUrologia.jpg" class="card-img-top" alt="Additional treatments" />
            <div class="card-body d-flex flex-column">
              <h5 class="TituloCardServicios">Urologia</h5>
              <p class="ParrafoCardServicios">
                Realizamos diagnósticos y tratamientos de las enfermedades del
                aparato urinario y del sistema reproductor masculino.
              </p>
              <a href="servicios/Urologia.php" class="btn btn-primary mt-auto">Leer Más</a>
            </div>
          </div>
        </div>
      </div>
      <hr />
    </div>
  </section>

  <section class="PaginaServiciosTotales py-1">
    <div class="container">
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4" id="services">
        <div class="col">
          <div class="card service-card h-100">
            <img src="img/imgServicios/imgServicioGinecología.jpg" class="card-img-top"
              alt="General and preventive care" />
            <div class="card-body d-flex flex-column">
              <h5 class="TituloCardServicios">Ginecología</h5>
              <p class="ParrafoCardServicios">
                Proveemos atención completa para la salud femenina, desde
                chequeos rutinarios hasta tratamientos especializados.
              </p>
              <a href="servicios/Ginecologia.php" class="btn btn-primary mt-auto">Leer Más</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card service-card h-100">
            <img src="img/imgServicios/imgServicioReumatología.jpg" class="card-img-top" alt="Cosmetic solutions" />
            <div class="card-body d-flex flex-column">
              <h5 class="TituloCardServicios">Reumatología</h5>
              <p class="ParrafoCardServicios">
                Tratamos enfermedades reumáticas con enfoques personalizados y
                tecnología avanzada para mejorar la calidad de vida.
              </p>
              <a href="servicios/Reumatologia.php" class="btn btn-primary mt-auto">Leer Más</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card service-card h-100">
            <img src="img/imgServicios/imgServicio1.jpg" class="card-img-top" alt="Restorative solutions" />
            <div class="card-body d-flex flex-column">
              <h5 class="TituloCardServicios">Medicina General</h5>
              <p class="ParrafoCardServicios">
                Ofrecemos servicios médicos generales para el diagnóstico,
                tratamiento y prevención de diversas enfermedades.
              </p>
              <a href="servicios/MedicinaGeneral.php" class="btn btn-primary mt-auto">Leer Más</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card service-card h-100">
            <img src="img/imgServicios/imgServicioGeriatria.jpg" class="card-img-top" alt="Additional treatments" />
            <div class="card-body d-flex flex-column">
              <h5 class="TituloCardServicios">Geriatría</h5>
              <p class="ParrafoCardServicios">
                Nos enfocamos en la salud integral de los adultos mayores,
                promoviendo su bienestar y calidad de vida.s
              </p>
              <a href="servicios/Geriatria.php" class="btn btn-primary mt-auto">Leer Más</a>
            </div>
          </div>
        </div>
      </div>
      <hr />
    </div>
  </section>

  <section class="PaginaServiciosTotales py-1">
    <div class="container">
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4" id="services">
        <div class="col">
          <div class="card service-card h-100">
            <img src="img/imgServicios/imgServicioEndocrinología.jpg" class="card-img-top"
              alt="General and preventive care" />
            <div class="card-body d-flex flex-column">
              <h5 class="TituloCardServicios">Endocrinología</h5>
              <p class="ParrafoCardServicios">
                Diagnósticos y tratamientos especializados para trastornos
                hormonales y metabólicos, adaptados a cada paciente.
              </p>
              <a href="servicios/Endocrinologia.php" class="btn btn-primary mt-auto">Leer Más</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card service-card h-100">
            <img src="img/imgServicios/imgServicioCirugíaGeneral.jpg" class="card-img-top" alt="Cosmetic solutions" />
            <div class="card-body d-flex flex-column">
              <h5 class="TituloCardServicios">Cirugía General</h5>
              <p class="ParrafoCardServicios">
                Realizamos procedimientos quirúrgicos con alta precisión y
                cuidados postoperatorios personalizados.
              </p>
              <a href="servicios/CirugiaGeneral.php" class="btn btn-primary mt-auto">Leer Más</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card service-card h-100">
            <img src="img/imgServicios/imgServicioFisiatría.jpg" class="card-img-top" alt="Restorative solutions" />
            <div class="card-body d-flex flex-column">
              <h5 class="TituloCardServicios">Fisiatría</h5>
              <p class="ParrafoCardServicios">
                Rehabilitamos y tratamos disfunciones físicas mediante
                terapias y ejercicios específicos para cada condición.
              </p>
              <a href="servicios/Fisiatria.php" class="btn btn-primary mt-auto">Leer Más</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card service-card h-100">
            <img src="img/imgServicios/imgServicioMedicinaInterna.jpg" class="card-img-top"
              alt="Additional treatments" />
            <div class="card-body d-flex flex-column">
              <h5 class="TituloCardServicios">Medicina Interna</h5>
              <p class="ParrafoCardServicios">
                Proveemos atención médica especializada para enfermedades
                complejas y crónicas en adultos.
              </p>
              <a href="servicios/MedicinaInterna.php" class="btn btn-primary mt-auto">Leer Más</a>
            </div>
          </div>
        </div>
      </div>
      <hr />
    </div>
  </section>
  <section class="PaginaServiciosTotales py-1">
    <div class="container">
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4" id="services">
        <div class="col">
          <div class="card service-card h-100">
            <img src="img/imgServicios/imgServicioNeurocirugía.jpg" class="card-img-top"
              alt="General and preventive care" />
            <div class="card-body d-flex flex-column">
              <h5 class="TituloCardServicios">Neurocirugía</h5>
              <p class="ParrafoCardServicios">
                Realizamos intervenciones quirúrgicas precisas para tratar
                trastornos del sistema nervioso central y periférico.
              </p>
              <a href="servicios/Neurocirugia.php" class="btn btn-primary mt-auto">Leer Más</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card service-card h-100">
            <img src="img/imgServicios/imgServicioPsicologíaAdultos.jpg" class="card-img-top"
              alt="Cosmetic solutions" />
            <div class="card-body d-flex flex-column">
              <h5 class="TituloCardServicios">Psicología Adultos</h5>
              <p class="ParrafoCardServicios">
                Brindamos apoyo psicológico y terapias personalizadas para
                mejorar la salud mental de los adultos.
              </p>
              <a href="servicios/PsicologiaAdultos.php" class="btn btn-primary mt-auto">Leer Más</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card service-card h-100">
            <img src="img/imgServicios/imgServicioPsicologíaInfantil.jpg" class="card-img-top"
              alt="Restorative solutions" />
            <div class="card-body d-flex flex-column">
              <h5 class="TituloCardServicios">Psicología Infantil</h5>
              <p class="ParrafoCardServicios">
                Apoyamos el desarrollo emocional y psicológico de los niños
                mediante terapias adaptadas a sus necesidades.
              </p>
              <a href="servicios/PsicologiaInfantil.php" class="btn btn-primary mt-auto">Leer Más</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card service-card h-100">
            <img src="img/imgServicios/imgServicioTerapiadeParejas.jpg" class="card-img-top"
              alt="Additional treatments" />
            <div class="card-body d-flex flex-column">
              <h5 class="TituloCardServicios">Terapia de Parejas</h5>
              <p class="ParrafoCardServicios">
                Ofrecemos asesoramiento y terapias para mejorar la
                comunicación y resolver conflictos en la relación de pareja.
              </p>
              <a href="servicios/TerapiaParejas.php" class="btn btn-primary mt-auto">Leer Más</a>
            </div>
          </div>
        </div>
      </div>
      <hr />
    </div>
  </section>
  <section class="PaginaServiciosTotales py-1">
    <div class="container">
      <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4" id="services">
        <div class="col">
          <div class="card service-card h-100">
            <img src="img/imgServicios/imgServicioTelepsicología.jpg" class="card-img-top"
              alt="General and preventive care" />
            <div class="card-body d-flex flex-column">
              <h5 class="TituloCardServicios">Telepsicología</h5>
              <p class="ParrafoCardServicios">
                Proveemos servicios de psicología a distancia para que puedas
                acceder a apoyo profesional desde cualquier lugar.
              </p>
              <a href="servicios/Telepsicologia.php" class="btn btn-primary mt-auto">Leer Más</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card service-card h-100">
            <img src="img/imgServicios/imgServicioGastroenterología.jpg" class="card-img-top"
              alt="Cosmetic solutions" />
            <div class="card-body d-flex flex-column">
              <h5 class="TituloCardServicios">Gastroenterología</h5>
              <p class="ParrafoCardServicios">
                Diagnóstico y tratamiento de enfermedades del sistema
                digestivo con enfoques modernos y efectivos.
              </p>
              <a href="servicios/Gastroenterologia.php" class="btn btn-primary mt-auto">Leer Más</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card service-card h-100">
            <img src="img/imgServicios/imgServicioIdentidadMental.jpg" class="card-img-top"
              alt="Restorative solutions" />
            <div class="card-body d-flex flex-column">
              <h5 class="TituloCardServicios">Identidad Mental</h5>
              <p class="ParrafoCardServicios">
                Apoyamos la exploración y afirmación de la identidad personal
                mediante terapias psicológicas especializadas.
              </p>
              <a href="servicios/Identidadmental.php" class="btn btn-primary mt-auto">Leer Más</a>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card service-card h-100">
            <img src="img/imgServicios/imgServicioConfianzaPositiva.jpg" class="card-img-top"
              alt="Additional treatments" />
            <div class="card-body d-flex flex-column">
              <h5 class="TituloCardServicios">Confianza Positiva</h5>
              <p class="ParrafoCardServicios">
                Fomentamos el bienestar emocional y la autoestima a través de
                programas terapéuticos personalizados.
              </p>
              <a href="servicios/confianzapositiva.php" class="btn btn-primary mt-auto">Leer Más</a>
            </div>
          </div>
        </div>
      </div>
      <hr />
    </div>
  </section>
  <?php include 'modulos/Footer.php'; ?>

  <script>
    src = "Scripts.js";
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
</body>

</html>