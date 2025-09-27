
<?php
// Database connection
$host = "127.0.0.1";       // or your server host
$user = "root";            // your MySQL username
$pass = "";                // your MySQL password
$db   = "xavim_app";       // your database name

$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query only published news, order by updated_at and created_at descending
$sql = "SELECT NewsId, Title, Content, Author, ImageUrl, Category, created_at, Updated_At
        FROM News
        WHERE IsPublished = 1
        ORDER BY Updated_At DESC, created_at DESC";

$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Xavi Murillo</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <meta http-equiv="Permissions-Policy" content="autoplay=(self), encrypted-media=(self)">



  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->
  <link rel="apple-touch-icon" sizes="57x57" href="assets/img/favicon/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="assets/img/favicon/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="assets/img/favicon/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img/favicon/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="assets/img/favicon/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="assets/img/favicon/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="assets/img/favicon/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="assets/img/favicon/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicon/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="assets/img/favicon/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16.png">
  <link rel="manifest" href="assets/img/favicon/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="assets/img/favicon/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/magnific-popup.css" rel="stylesheet">
  <link href="assets/vendor/scss/_video.scss" rel="stylesheet">
  <link href="assets/vendor/slick.css" rel="stylesheet">
  <link href="assets/vendor/style.css" rel="stylesheet">

  
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">


  <!-- =======================================================
  * Template Name: iPortfolio
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Updated: Jun 29 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  <!-- Your existing head content -->
  
  <style>
    /* Custom font size improvements */
    body { font-size: 16px !important; }
    p { font-size: 16px !important; line-height: 1.7 !important; }
    .card-text { font-size: 16px !important; }
    .accordion-body { font-size: 15px !important; }
    .service-item p { font-size: 16px !important; }
    
    @media (max-width: 768px) {
      body { font-size: 16px !important; }
      p { font-size: 16px !important; }
    }
  </style>
</head>

<body class="index-page">

  <header id="header" class="header dark-background d-flex flex-column">
    <i class="header-toggle  bi bi-list"></i>

    <div class="profile-img">
      <img src="assets/img/my-profile-img.jpg" alt="" class="img-fluid rounded-circle">
    </div>

    <a href="index.html" class="logo d-flex align-items-center justify-content-center">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <!-- <img src="assets/img/logo.png" alt=""> -->
      <h1 class="sitename">Xavi Murillo</h1>
    </a>

    <div class="social-links text-center">
      <a href="https://www.facebook.com/javierorlando.murillocastaneda" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="https://www.instagram.com/jomurillo84/?next=%2F" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="https://www.linkedin.com/in/javier-murillo-casta%C3%B1eda-12985a181/" class="linkedin"><i class="bi bi-linkedin"></i></a>
    </div>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="#hero" class="active"><i class="bi bi-house navicon"></i>Inicio</a></li>
        <li><a href="#about"><i class="bi bi-person navicon"></i> Perfil Profesional</a></li>
        <li><a href="#resume"><i class="bi bi-file-earmark-text navicon"></i> Currículum</a></li>
        <li><a href="#news"><i class="bi bi-file-earmark-text navicon"></i> Noticias</a></li>
        <li><a href="#portfolio"><i class="bi bi-images navicon"></i> Portfolio</a></li>
        <li><a href="#services"><i class="bi bi-hdd-stack navicon"></i> Servicios</a></li>
        <!-- <li class="dropdown"><a href="#"><i class="bi bi-menu-button navicon"></i> <span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="#">Dropdown 1</a></li>
            <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Deep Dropdown 1</a></li>
                <li><a href="#">Deep Dropdown 2</a></li>
                <li><a href="#">Deep Dropdown 3</a></li>
                <li><a href="#">Deep Dropdown 4</a></li>
                <li><a href="#">Deep Dropdown 5</a></li>
              </ul>
            </li>
            <li><a href="#">Dropdown 2</a></li>
            <li><a href="#">Dropdown 3</a></li>
            <li><a href="#">Dropdown 4</a></li>
          </ul>
        </li> -->
        <li><a href="#contact"><i class="bi bi-envelope navicon"></i> Contacto</a></li>
      </ul>
    </nav>

  </header>

  <main class="main">

    <!-- Hero Section -->
   
    <section id="hero" class="hero section dark-background" style="position: absolute !important; text-align: center;">
      <!-- <img id="myPhoto"  class="my-image" src="assets/img/hero-bg.jpg" alt="" data-aos="fade-in" class=""> -->
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <h2 class="font-xavimurillo">Xavi Murillo</h2>
        <p class="font-xavimurillo">Soy Compositor, Productor, Pianista<span class="typed-cursor typed-cursor--blink" aria-hidden="true">
          </span><span class="typed-cursor typed-cursor--blink" aria-hidden="true"></span></p>
      </div>
    </section>
      <!-- Video Background -->
        <video autoplay muted loop playsinline class="video-background">
        <source src="assets/videos/Max_Richter_TheDeparture.mp4" type="video/mp4">
      </video> 
    <!-- /Hero Section -->
      <div id="myCarousel" class="carousel slide" data-bs-ride="carousel" >
        <div class="carousel-inner">    
          <div class="carousel-item active" data-bs-interval="4000">
            <img id="myPhotohero-bg" src="assets/img/banner/hero-bg.jpg"  class="d-block w-100" alt="">
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img id="myPhotobanner8" src="assets/img/banner/banner8.jpg"  class="d-block w-100" alt="">
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img id="myPhotobanner7" src="assets/img/banner/banner7.jpg"  class="d-block w-100" alt="">
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img id="myPhotobanner6" src="assets/img/banner/banner6.jpg"  class="d-block w-100" alt="">
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img id="myPhotobanner5" src="assets/img/banner/banner5.jpg"  class="d-block w-100" alt="">
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img id="myPhotobanner4" src="assets/img/banner/banner4.jpg"  class="d-block w-100" alt="">
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img id="myPhotobanner3" src="assets/img/banner/banner3.jpg"  class="d-block w-100" alt="">
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img id="myPhotobanner2" src="assets/img/banner/banner2.jpg"  class="d-block w-100" alt="">
          </div>
          <div class="carousel-item" data-bs-interval="4000">
            <img id="myPhotobanner1" src="assets/img/banner/banner1.jpg"  class="d-block w-100" alt="">
          </div>
        </div>
      </div>    

    <!-- About Section -->
    <section id="about" class="about section dark-background">
        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
          <h2>Perfil Profesional</h2>
          <p>Soy músico con habilidades en composición, producción musical, dirección, orquestación, interpretación de piano y teclados, arreglos y la enseñanza musical.</p>
        </div>
        
        <div class="container" data-aos="fade-up" data-aos-delay="100">
          <div class="row gy-4 justify-content-center">
            <div class="col-lg-4">
              <img src="assets/img/my-profile-img.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-lg-8 content">
              <h2>Enseñanza Musical &amp; Orquestación.</h2>
              <div class="row">
                <div class="col-lg-6">
                  <ul>
                    <li><p><i class="bi bi-chevron-right"></i> Sitio Web: <span><a href="http://xavim.sytes.net:8001/" target="_blank">xavim.sytes.net</a></span></p></li>
                    <li><p><i class="bi bi-chevron-right"></i> Teléfono: <span>+57 310 3000124</span></p></li>
                    <li><p><i class="bi bi-chevron-right"></i> Ciudad: <span>Facatativá, Cundinamarca</span></p></li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li><p><i class="bi bi-chevron-right"></i> Grado: <span>Master</span> </p></li>
                    <li><p><i class="bi bi-chevron-right"></i> Email: <span>xavimurillo7@gmail.com</span></p></li>
                    <li><p><i class="bi bi-chevron-right"></i> Ocupación: <span>Disponible</span></p></li>
                  </ul>
                </div>
              </div>
              <p class="py-3">
                <!-- Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
                Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. -->
              </p>
            </div>
          </div>
        </div>
      </section><!-- /About Section -->
      
    <!-- Stats Section -->
    <section id="stats" class="stats section gray-background">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Clientes Satisfechos</strong> <span>que confían en nosotros</span></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Proyectos Realizados</strong> <span>con calidad y compromiso</span></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="1453" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Horas de Soporte</strong> <span>siempre disponibles para ti</span></p>
            </div>
          </div><!-- End Stats Item -->

          <div class="col-lg-3 col-md-6">
            <div class="stats-item">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="32" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Colaboradores</strong> <span>dedicados y apasionados</span></p>
            </div>
          </div><!-- End Stats Item -->
        </div>
      </div>
    </section><!-- /Stats Section -->

    <!-- Skills Section -->
    <section id="skills" class="skills section gray-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Habilidades</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row skills-content skills-animation">

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>Composición</span> <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>Enseñanza musical</span> <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>Interpretación y grabación de piano y teclados</span> <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

          </div>

          <div class="col-lg-6">

            <div class="progress">
              <span class="skill"><span>Dirección musical</span> <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>Orquestación</span> <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div><!-- End Skills Item -->

            <div class="progress">
              <span class="skill"><span>Producción musical</span> <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>
            <!-- End Skills Item -->
          </div>
        </div>
      </div>

    </section><!-- /Skills Section -->

    <!-- currículum Section -->
    <section id="resume" class="resume section dark-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2 style="color: white !important;">Currículum</h2>
        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
      </div><!-- End Section Title -->

      
      <div class="container">
        <div class="row">
         <div class="col-lg-12" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title" style="color: white !important;">Historial Académico</h3>

          <div class="accordion" id="accordionExample">
            <div class="resume-item">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <h4>Master en composición con nuevas tecnologías</h4>
                    </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h5>2015 - 2016</h5>
                      <p><em>Universidad de La Rioja, España</em></p>
                      <p>
                        <ul>
                          <li>Orquestación</li>
                          <li>Música audiovisual</li>
                          <li>Mezcla y masterización</li>
                        </ul>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            <div class="resume-item">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <h4>Ejecución instrumental</h4>
                  </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <h5>De Junio 2011 a diciembre 2013</h5>
                    <p><em>Instituto Canzion, Colombia</em></p>
                    <p>
                      <ul>
                        <li>Mención de honor a trabajo de grado</li>
                        <li>Ejecución de piano</li>
                        <li>Mi trabajo de grado fué la orquestación de algunos temas de rock pop.</li>
                      </ul>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="resume-item">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <h4>Administración de empresas</h4>
                  </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <h5>Junio de 2001 a 28 de Julio de 2006</h5>
                    <p><em>Universidad de Cundinamarca, Colombia</em></p>
                    <p>
                      <ul>
                        <li>Negocios</li>
                        <li>Economía</li>
                        <li>Contabilidad</li>
                      </ul>
                    </p>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div> 
         
        
          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="200">
          <h3 class="resume-title" style="color: white !important;">Experiencia Profesional</h3>
          
            <div class="accordion" id="accordionExample">
              <div class="resume-item">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                      <h4>Pianista y Teclista</h4>
                    </button>
                  </h2>
                  <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <p><em>Bogotá</em></p>
                      <p>
                        <ul>
                          <li>Intérprete versátil que ha dado vida a escenarios con proyectos como Getzmonk, Quinteto La Academia, Erick Romero, Día 3, Disonance y Eres Libertad, fusionando técnica, creatividad y emoción para transformar cada presentación en una experiencia única.</li>
                        </ul>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="resume-item">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                      <h4>Director asociado, compositor, productor y teclista</h4>
                    </button>
                  </h2>
                  <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h5>Septiembre 2020-Nov. 2021</h5>
                      <p><em>Proyecto "no quiero crecer", Bogotá</em></p>
                      <p>
                        <ul>
                          <li>Encargado de la dirección musical, composición, arreglos
                            y producción musical del mundo sonoro de la obra de
                            teatro "no quiero crecer" dirigida por el reconocido actor
                            Bernardo Garcia</li>
                        </ul>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="resume-item">
                  <div class="accordion-item">
                  <h2 class="accordion-header" id="headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                      <h4>Director asistente coral Gioviale-Docente de teclado, solfeo y estimulación musical-productor</h4>
                    </button>
                  </h2>
                  <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h5>3 de marzo del 2001 hasta el 30 de Mayo de 2019.</h5>
                      <p><em>Academia de música y artes de Facatativá</em></p>
                      <p>
                        <ul>
                           <li>Dirección asistente de la coral Gioviale en los festivales de
                              corearte Barcelona 2014 y concurso suramericano de coros
                              organizado por la AAMCAM en 2009. Clases de piano, teoría y
                              estimulación musical. Producción musical del video
                              conmemorativo de los 20 años de la coral Gioviale.</li>
                              <li> <a href="https://www.youtube.com/watch?v=3SqzlvrKM78" target="_blank">Coral Gioviale 25 años - Bullerengue</a></li>
                        </ul>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="resume-item">
                  <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFourteen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFourteen" aria-expanded="false" aria-controls="collapseFourteen">
                      <h4>Docente de piano</h4>
                    </button>
                  </h2>
                  <div id="collapseFourteen" class="accordion-collapse collapse" aria-labelledby="headingFourteen" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h5>5 de Abril a la actualidad</h5>
                      <p><em>Instituto de cultura y turismo de Tenjo</em></p>
                      <p>
                        <ul>
                          <li>Clases de piano a todas las edades.</li>
                        </ul>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="resume-item">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                      <h4>Productor musical-compositor-arreglista</h4>
                    </button>
                  </h2>
                  <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h5>Junio de 2018 a la actualidad</h5>
                      <p><em>Mi proyecto musical</em></p>
                      <p>
                        <ul>
                          <li><a href="https://www.youtube.com/watch?v=xycNnSUx2nc" target="_blank">Codecs. Xavi Murillo</a></li>
                          <li><a href="https://www.youtube.com/watch?v=TDyqOy2dlg4" target="_blank">Pueblito viejo. Jazz Fusion. Compositor: Jose A. Morales</a></li>
                          <li><a href="https://www.youtube.com/watch?v=hhjA7gAC33k" target="_blank">Para Elisa: Fusión cumbia y jazz. Xavi M.</a></li>
                          <li><a href="https://www.youtube.com/watch?v=BjpZ0DsQiS4" target="_blank">Fiesta Bambuquera</a></li>
                        </ul>
                      </p>
                    </div>
                  </div>
                </div>
              </div>  
              <div class="resume-item">
                 <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                      <h4>Teclista-arreglista</h4>
                    </button>
                  </h2>
                  <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h5>Abril de 2019 a la actualidad</h5>
                      <p><em>Erick Romero</em></p>
                      <p>
                        <ul>
                           <li><a href="https://www.youtube.com/watch?v=fZHBAnUoKuw&list=RDEMOQJZcqC5Qlm2RKDqrq_5Xg&sta" target="_blank">Amor sin condición l Reckless love - Erick Romero (Cover l Bethel Music)</a></li>
                            <li><a href="https://www.youtube.com/watch?v=SZSdq1CA0Zc&list=RDEMOQJZcqC5Qlm2RKDqrq_5Xg&ind" target="_blank">Noche de paz - Erick Romero</a></li>
                            <li><a href="https://www.youtube.com/watch?v=tJztkbiS29k" target="_blank"> Arreglo armónico, synths y teclados de contigo</a></li>
                            <li><a href="https://www.youtube.com/watch?v=fGEnh3e8raE" target="_blank">Grabación de teclado en Amarte me hace bien</a></li>
                        </ul>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="resume-item">
                 <div class="accordion-item">
                  <h2 class="accordion-header" id="headingEleven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                      <h4>Estimulación musical</h4>
                    </button>
                  </h2>
                  <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h5>Febrero 2009 a 2023</h5>
                      <p><em>CEI por un Futu</em></p>
                      <p>
                        <ul> 
                          <li>Estimulación musical a niños de 0 a 6 años.</li>
                        </ul>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="resume-item">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingTwelve">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwelve" aria-expanded="false" aria-controls="collapseTwelve">
                      <h4>Docente de teclado</h4>
                    </button>
                  </h2>
                  <div id="collapseTwelve" class="accordion-collapse collapse" aria-labelledby="headingTwelve" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h5>17 de Febrero de 2014 a 15 de Junio de 2018</h5>
                      <p><em>Instituto Canzion Colombia</em></p>
                      <p>
                        <ul> 
                          <li>Clases de teclado a todas las edades.</li>
                        </ul>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="resume-item">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingThirteen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThirteen" aria-expanded="false" aria-controls="collapseThirteen">
                      <h4>Director-Productor-Compositor</h4>
                    </button>
                  </h2>
                  <div id="collapseThirteen" class="accordion-collapse collapse" aria-labelledby="headingThirteen" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h5>Dia 3- 2009 a 2020</h5>
                      <p><em>Instituto Canzion Colombia</em></p>
                      <p>
                        <ul>     
                          <li>
                            <a href="https://www.youtube.com/watch?v=QhYt_ByueJU" target="_blank">Eres</a>
                          </li>
                          <li><a href="https://www.youtube.com/watch?v=rhzFfUkYK30&t=95s" target="_blank">No me hace falta nada</a></li>
                          <li><a href="https://www.youtube.com/watch?v=wgh5fAzMjFE" target="_blank">Dios (La estazion)</a></li>
                          <li><a href="https://www.youtube.com/watch?v=hFAG4lTe3Tk" target="_blank">Te esperaré la estazion</a></li>
                        </ul>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="resume-item">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="headingFiveteen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFiveteen" aria-expanded="false" aria-controls="collapseFiveteen">
                      <h4>Director Musical Internacional</h4>
                    </button>
                  </h2>
                  <div id="collapseFiveteen" class="accordion-collapse collapse" aria-labelledby="headingFiveteen" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                      <h5>2020 - 2025</h5>
                      <p><em>Soy Semilla (Nashville, EE. UU.)</em></p>
                      <p>
                        <ul>     
                          <li>Como director Musical de Soy Semilla, tengo la misión de guiar y potenciar el talento de cada participante para servir a Dios a través de la música, creando un espacio donde el arte se convierta en un puente entre culturas, generaciones y corazones.</li>
                          <li>En este programa internacional, combino mi experiencia como compositor, productor y educador con una visión de liderazgo que fomenta la creatividad, el respeto y la adoración genuina. En cada ensayo y presentación, mi meta es que cada nota cuente una historia y que cada intérprete sienta que es parte de algo más grande: una semilla de fe y esperanza que florece a través del arte para la gloria de Dios.</li>
                          <li>Creo firmemente que la música no solo se escucha: se vive, se comparte y transforma. Soy Semilla es el escenario donde esas transformaciones suceden.</li>
                          </ul>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              
              
            <div class="resume-item">
              <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    <h4>Ultimos trabajos</h4>
                  </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    <p><em>Composición para orquesta sinfónica interpretada por la orquesta Filarmonía de Madrid España dirigida por Pascual Osa y Rafael Albiñana</em></p>
                    <p>
                      <ul>
                        <li><a href="https://www.youtube.com/watch?v=1_f3WLWuYBc" target="_blank">Obertura 1 La melena del León</a></li>
                      </ul>
                    </p>
                  
                    <p><em>Composicion musical para cortometraje</em></p>
                    <p>
                        <ul>
                          <li><a href="https://www.youtube.com/watch?v=ftrPi1WLjeU" target="_blank">Javi M. Star Wars</a></li>
                        </ul>
                      </p>
                      
                      <p><em>Composición musical para corto animado</em></p>
                      <p>
                        <ul>
                          <li><a href="https://www.youtube.com/watch?v=wkPHMhH5VO4" target="_blank">Ratatouille Animación 1´28 Javi M</a></li>
                        </ul>
                      </p>
                      
                      <p><em>Composición electroacústica</em></p>
                      <p>
                        <ul>
                          <li><a href="https://www.youtube.com/watch?v=GjWWdr14of8&t=54s" target="_blank">Entorno sideral. Javi M</a></li>
                        </ul>
                      </p>
                      
                      <p><em>Composición de música para videodanza</em></p>
                      <p>
                        <ul>
                          <li><a href="https://www.youtube.com/watch?v=vMA9DHUkqV4" target="_blank">Levitation Videodanza</a></li>
                        </ul>
                      </p>
                      
                      <p><em>Música y producción ejecutiva de "Tras tus pasos"</em></p>
                      <p>
                        <ul>
                          <li><a href="https://www.youtube.com/watch?v=Y_UuS9nQNiQ" target="_blank">Tras Sus Pasos - Erick Romero l Video oficial ®</a></li>
                        </ul>
                      </p>
                    </div>
                  </div>
                </div>
            </div>
            </div>
          <!-- Edn Resume Item -->
          </div>
        </div>
      </div>
    </section><!-- /Resume Section -->
    
<!-- Enhanced News Section HTML -->
<section id="news" class="news section gray-background">
    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
        <h2>Noticias</h2>
        <p>Últimas novedades y actualizaciones sobre proyectos musicales y presentaciones</p>
    </div>

    <div class="container">
        <div class="news-card-container">
            <?php if ($result && $result->num_rows > 0): ?>
                <?php while($row = $result->fetch_assoc()): ?>
                    <article class="news-card" data-aos="fade-up" data-aos-delay="100">
                        <!-- Card Image -->
                        <div class="news-card-image">
                            <?php if (!empty($row['ImageUrl'])): ?>
                                <img src="<?php echo htmlspecialchars($row['ImageUrl']); ?>" 
                                     alt="<?php echo htmlspecialchars($row['Title']); ?>"
                                     loading="lazy"
                                     onload="this.parentElement.classList.remove('loading')"
                                     onerror="this.src='assets/img/news-placeholder.jpg'">
                            <?php else: ?>
                                <img src="assets/img/news-placeholder.jpg" 
                                     alt="Imagen de noticia predeterminada">
                            <?php endif; ?>
                        </div>

                        <!-- Card Content -->
                        <div class="news-card-content">
                            <!-- Category Badge -->
                            <span class="news-card-category">
                                <?php echo !empty($row['Category']) ? htmlspecialchars($row['Category']) : 'General'; ?>
                            </span>

                            <!-- Title -->
                            <h3 class="news-card-title">
                                <?php echo htmlspecialchars($row['Title']); ?>
                            </h3>

                            <!-- Meta Information -->
                            <div class="news-card-meta">
                                <div class="news-card-author">
                                    <?php echo htmlspecialchars($row['Author']); ?>
                                </div>
                                <div class="news-card-date">
                                    <?php echo date("d M Y", strtotime($row['created_at'])); ?>
                                </div>
                            </div>

                            <!-- Excerpt -->
                            <p class="news-card-excerpt">
                                <?php 
                                    $excerpt = strip_tags($row['Content']);
                                    echo htmlspecialchars(mb_substr($excerpt, 0, 150)) . '...';
                                ?>
                            </p>

                            <!-- Actions -->
                            <div class="news-card-actions">                                
                                <a class="newsViewer" href="<?php echo $row['ImageUrl']; ?>" data-bs-toggle="modal" data-bs-target="#newsModal" class="news-card-btn"> 
                                  <i class="bi bi-play"></i>
                                  Leer más
                                </a>
                                
                                <div class="news-card-stats">
                                    <div class="news-card-stat">
                                        <span>👁</span>
                                        <span>124</span>
                                    </div>
                                    <div class="news-card-stat">
                                        <span>💬</span>
                                        <span>5</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </article>
                <?php endwhile; ?>
            <?php else: ?>
                <!-- Empty State -->
                <div class="news-empty-state">
                    <div class="news-empty-icon">📰</div>
                    <h3>No hay noticias disponibles</h3>
                    <p>Pronto habrá contenido nuevo disponible</p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
  <!-- JavaScript to Autoplay and Stop Video -->

    <!-- Portfolio Section -->
    <section id="portfolio" class="portfolio section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Portafolio</h2>
        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter=".filter-productions" class="filter-active">Producciones</li>
            <li data-filter=".filter-videodanza">Música video danza</li>
            <li data-filter=".filter-musica_orquestal">Música orquestal</li>
            <li data-filter=".filter-musica_cine">Música para cine</li>
            <li data-filter=".filter-musica_electro_acustica">Música electro acústica</li>
            <li data-filter=".filter-direccion_procesos_musicales">Dirección de procesos musicales</li> 
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
            


            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-productions">
              <div class="portfolio-content h-100">
                <div class="youtube_video_area">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                              <div class="single_video">
                                <div class="thumb">
                                    <img src="https://img.youtube.com/vi/RVTr3t6kQ24/hqdefault.jpg"  class="img-fluid" alt="">
                                </div>
                                <div class="hover_elements">
                                    <div class="portfolio-info">
                                      <div class="video">
                                          <a class="my-link" href="https://www.youtube.com/embed/RVTr3t6kQ24?autoplay=1" data-bs-toggle="modal" data-bs-target="#videoModal"> 
                                            <i class="bi bi-play"></i>
                                          </a>
                                      </div>
                                      <h3><div style="color: white;">Regalame esta noche</div></h3>
                                        <div class="hover_inner">
                                          <h4>GETZMONK</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>  
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-musica_orquestal">
              <div class="portfolio-content h-100">
                <div class="youtube_video_area">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                              <div class="single_video">
                                <div class="thumb">
                                    <img src="https://img.youtube.com/vi/1_f3WLWuYBc/hqdefault.jpg"  class="img-fluid" alt="">
                                </div>
                                <div class="hover_elements">
                                    <div class="portfolio-info">
                                      <div class="video">
                                          <a class="my-link" href="https://www.youtube.com/embed/1_f3WLWuYBc?autoplay=1" data-bs-toggle="modal" data-bs-target="#videoModal"> 
                                            <i class="bi bi-play"></i>
                                          </a>
                                      </div>
                                      <h3><div style="color: white;">Obertura 1 La melena del León</div></h3>
                                        <div class="hover_inner">
                                          <h4>Xavi Murillo</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>  
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-productions">
              <div class="portfolio-content h-100">
                <div class="youtube_video_area">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                              <div class="single_video">
                                <div class="thumb">
                                    <img src="https://img.youtube.com/vi/jN2mz4KB2Pw/hqdefault.jpg"  class="img-fluid" alt="">
                                </div>
                                <div class="hover_elements">
                                    <div class="portfolio-info">
                                      <div class="video">
                                          <a class="my-link" href="https://www.youtube.com/embed/jN2mz4KB2Pw?autoplay=1" data-bs-toggle="modal" data-bs-target="#videoModal"> 
                                            <i class="bi bi-play"></i>
                                          </a>
                                      </div>
                                      <h3><div style="color: white;">Max Richter-The Departure (cover Xavi Murillo)</div></h3>
                                        <div class="hover_inner">
                                          <h4>Xavi Murillo</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>  
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-musica_orquestal">
              <div class="portfolio-content h-100">
                <div class="youtube_video_area">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                              <div class="single_video">
                                <div class="thumb">
                                    <img src="https://img.youtube.com/vi/TDyqOy2dlg4/hqdefault.jpg"  class="img-fluid" alt="">
                                </div>
                                <div class="hover_elements">
                                    <div class="portfolio-info">
                                      <div class="video">
                                          <a class="my-link" href="https://www.youtube.com/embed/TDyqOy2dlg4?autoplay=1" data-bs-toggle="modal" data-bs-target="#videoModal"> 
                                            <i class="bi bi-play"></i>
                                          </a>
                                      </div>
                                      <h3><div style="color: white;">Pueblito viejo. Jazz Fusion. Compositor: Jose A. Morales</div></h3>
                                        <div class="hover_inner">
                                          <h4>Xavi Murillo</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>  
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-musica_cine">
              <div class="portfolio-content h-100">
                <div class="youtube_video_area">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                              <div class="single_video">
                                <div class="thumb">
                                    <img src="https://img.youtube.com/vi/wkPHMhH5VO4/hqdefault.jpg"  class="img-fluid" alt="">
                                </div>
                                <div class="hover_elements">
                                    <div class="portfolio-info">
                                      <div class="video">
                                          <a class="my-link" href="https://www.youtube.com/embed/wkPHMhH5VO4?autoplay=1" data-bs-toggle="modal" data-bs-target="#videoModal"> 
                                            <i class="bi bi-play"></i>
                                          </a>
                                      </div>
                                      <h3><div style="color: white;">Ratatouille Animación 1´28 Javi M</div></h3>
                                        <div class="hover_inner">
                                          <h4>Xavi Murillo</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>  
              </div>
            </div>
            

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-musica_orquestal">
              <div class="portfolio-content h-100">
                <div class="youtube_video_area">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                              <div class="single_video">
                                <div class="thumb">
                                    <img src="https://img.youtube.com/vi/hhjA7gAC33k/hqdefault.jpg"  class="img-fluid" alt="">
                                </div>
                                <div class="hover_elements">
                                    <div class="portfolio-info">
                                      <div class="video">
                                          <a class="my-link" href="https://www.youtube.com/embed/hhjA7gAC33k?autoplay=1" data-bs-toggle="modal" data-bs-target="#videoModal"> 
                                            <i class="bi bi-play"></i>
                                          </a>
                                      </div>
                                      <h3><div style="color: white;">Para Elisa: Fusión cumbia y jazz. Xavi M.</div></h3>
                                        <div class="hover_inner">
                                          <h4>Xavi Murillo</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>  
              </div>
            </div>


            <div class="col-lg-4 col-md-6 portfolio-item isotope-item">
              <div class="portfolio-content h-100">
                <div class="youtube_video_area">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                              <div class="single_video">
                                <div class="thumb">
                                    <img src="https://img.youtube.com/vi/tJztkbiS29k/hqdefault.jpg"  class="img-fluid" alt="">
                                </div>
                                <div class="hover_elements">
                                    <div class="portfolio-info">
                                      <div class="video">
                                          <a class="my-link" href="https://www.youtube.com/embed/tJztkbiS29k?autoplay=1" data-bs-toggle="modal" data-bs-target="#videoModal"> 
                                            <i class="bi bi-play"></i>
                                          </a>
                                      </div>
                                      <h3><div style="color: white;">Contigo</div></h3>
                                        <div class="hover_inner">
                                          <h4>Erick Romero Ft. Jon Moreno l Video oficial ®</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>  
              </div>
            </div>
            
            
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item">
              <div class="portfolio-content h-100">
                <div class="youtube_video_area">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                              <div class="single_video">
                                <div class="thumb">
                                    <img src="https://img.youtube.com/vi/yEtbl4yJtS4/hqdefault.jpg"  class="img-fluid" alt="">
                                </div>
                                <div class="hover_elements">
                                    <div class="portfolio-info">
                                      <div class="video">
                                          <a class="my-link" href="https://www.youtube.com/embed/yEtbl4yJtS4?autoplay=1" data-bs-toggle="modal" data-bs-target="#videoModal"> 
                                            <i class="bi bi-play"></i>
                                          </a>
                                      </div>
                                      <h3><div style="color: white;">Tiempo (TIME WAITS FOR NO ONE. FREDDIE MERCURY)</div></h3>
                                        <div class="hover_inner">
                                          <h4>GETZMONK</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>  
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-musica_cine">
              <div class="portfolio-content h-100">
                <div class="youtube_video_area">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                              <div class="single_video">
                                <div class="thumb">
                                    <img src="https://img.youtube.com/vi/ftrPi1WLjeU/hqdefault.jpg"  class="img-fluid" alt="">
                                </div>
                                <div class="hover_elements">
                                    <div class="portfolio-info">
                                      <div class="video">
                                          <a class="my-link" href="https://www.youtube.com/embed/ftrPi1WLjeU?autoplay=1" data-bs-toggle="modal" data-bs-target="#videoModal"> 
                                            <i class="bi bi-play"></i>
                                          </a>
                                      </div>
                                      <h3><div style="color: white;">Javi M. Star Wars</div></h3>
                                        <div class="hover_inner">
                                          <h4>Xavi Murillo</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>  
              </div>
            </div>
            



            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-musica_electro_acustica">
              <div class="portfolio-content h-100">
                <div class="youtube_video_area">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                              <div class="single_video">
                                <div class="thumb">
                                    <img src="https://img.youtube.com/vi/fZHBAnUoKuw/hqdefault.jpg"  class="img-fluid" alt="">
                                </div>
                                <div class="hover_elements">
                                    <div class="portfolio-info">
                                      <div class="video">
                                          <a class="my-link" href="https://www.youtube.com/embed/fZHBAnUoKuw?autoplay=1" data-bs-toggle="modal" data-bs-target="#videoModal"> 
                                            <i class="bi bi-play"></i>
                                          </a>
                                      </div>
                                      <h3><div style="color: white;">Amor sin condición l Reckless love</div></h3>
                                        <div class="hover_inner">
                                          <h4>Erick Romero (Cover l Bethel Music)</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>  
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-musica_electro_acustica">
              <div class="portfolio-content h-100">
                <div class="youtube_video_area">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                              <div class="single_video">
                                <div class="thumb">
                                    <img src="https://img.youtube.com/vi/SZSdq1CA0Zc/hqdefault.jpg"  class="img-fluid" alt="">
                                </div>
                                <div class="hover_elements">
                                    <div class="portfolio-info">
                                      <div class="video">
                                          <a class="my-link" href="https://www.youtube.com/embed/SZSdq1CA0Zc?autoplay=1" data-bs-toggle="modal" data-bs-target="#videoModal"> 
                                            <i class="bi bi-play"></i>
                                          </a>
                                      </div>
                                      <h3><div style="color: white;">Noche de paz</div></h3>
                                        <div class="hover_inner">
                                          <h4>Erick Romero</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>  
              </div>
            </div>
            
            
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-musica_electro_acustica">
              <div class="portfolio-content h-100">
                <div class="youtube_video_area">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                              <div class="single_video">
                                <div class="thumb">
                                    <img src="https://img.youtube.com/vi/fGEnh3e8raE/hqdefault.jpg"  class="img-fluid" alt="">
                                </div>
                                <div class="hover_elements">
                                    <div class="portfolio-info">
                                      <div class="video">
                                          <a class="my-link" href="https://www.youtube.com/embed/fGEnh3e8raE?autoplay=1" data-bs-toggle="modal" data-bs-target="#videoModal"> 
                                            <i class="bi bi-play"></i>
                                          </a>
                                      </div>
                                      <h3><div style="color: white;">Amarte me hace bien</div></h3>
                                        <div class="hover_inner">
                                          <h4>Erick Romero Ft. Jembo D l Video oficial ®</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>  
              </div>
            </div>
                       
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-productions">
              <div class="portfolio-content h-100">
                <div class="youtube_video_area">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                              <div class="single_video">
                                <div class="thumb">
                                    <img src="https://img.youtube.com/vi/xycNnSUx2nc/hqdefault.jpg"  class="img-fluid" alt="">
                                </div>
                                <div class="hover_elements">
                                    <div class="portfolio-info">
                                      <div class="video">
                                          <a class="my-link" href="https://www.youtube.com/embed/xycNnSUx2nc?autoplay=1" data-bs-toggle="modal" data-bs-target="#videoModal"> 
                                            <i class="bi bi-play"></i>
                                          </a>
                                      </div>
                                      <h3><div style="color: white;">Codecs</div></h3>
                                        <div class="hover_inner">
                                          <h4>Xavi Murillo</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>  
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-musica_orquestal">
              <div class="portfolio-content h-100">
                <div class="youtube_video_area">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                              <div class="single_video">
                                <div class="thumb">
                                    <img src="https://img.youtube.com/vi/BjpZ0DsQiS4/hqdefault.jpg"  class="img-fluid" alt="">
                                </div>
                                <div class="hover_elements">
                                    <div class="portfolio-info">
                                      <div class="video">
                                          <a class="my-link" href="https://www.youtube.com/embed/BjpZ0DsQiS4?autoplay=1" data-bs-toggle="modal" data-bs-target="#videoModal"> 
                                            <i class="bi bi-play"></i>
                                          </a>
                                      </div>
                                      <h3><div style="color: white;">Fiesta Bambuquera</div></h3>
                                        <div class="hover_inner">
                                          <h4>Xavi Murillo</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>  
              </div>
            </div>
            
            
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-musica_orquestal">
              <div class="portfolio-content h-100">
                <div class="youtube_video_area">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                              <div class="single_video">
                                <div class="thumb">
                                    <img src="https://img.youtube.com/vi/3SqzlvrKM78/hqdefault.jpg"  class="img-fluid" alt="">
                                </div>
                                <div class="hover_elements">
                                    <div class="portfolio-info">
                                      <div class="video">
                                          <a class="my-link" href="https://www.youtube.com/embed/3SqzlvrKM78?autoplay=1" data-bs-toggle="modal" data-bs-target="#videoModal"> 
                                            <i class="bi bi-play"></i>
                                          </a>
                                      </div>
                                      <h3><div style="color: white;">Coral Gioviale 25 años</div></h3>
                                        <div class="hover_inner">
                                          <h4>Bullerengue</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>  
              </div>
            </div>
            

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-musica_electro_acustica">
              <div class="portfolio-content h-100">
                <div class="youtube_video_area">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                              <div class="single_video">
                                <div class="thumb">
                                    <img src="https://img.youtube.com/vi/GjWWdr14of8/hqdefault.jpg"  class="img-fluid" alt="">
                                </div>
                                <div class="hover_elements">
                                    <div class="portfolio-info">
                                      <div class="video">
                                          <a class="my-link" href="https://www.youtube.com/embed/GjWWdr14of8?autoplay=1" data-bs-toggle="modal" data-bs-target="#videoModal"> 
                                            <i class="bi bi-play"></i>
                                          </a>
                                      </div>
                                      <h3><div style="color: white;">Entorno sideral. Javi M</div></h3>
                                        <div class="hover_inner">
                                          <h4>Xavi Murillo</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>  
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-videodanza">
              <div class="portfolio-content h-100">
                <div class="youtube_video_area">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                              <div class="single_video">
                                <div class="thumb">
                                    <img src="https://img.youtube.com/vi/vMA9DHUkqV4/hqdefault.jpg"  class="img-fluid" alt="">
                                </div>
                                <div class="hover_elements">
                                    <div class="portfolio-info">
                                      <div class="video">
                                          <a class="my-link" href="https://www.youtube.com/embed/vMA9DHUkqV4?autoplay=1" data-bs-toggle="modal" data-bs-target="#videoModal"> 
                                            <i class="bi bi-play"></i>
                                          </a>
                                      </div>
                                      <h3><div style="color: white;">Levitation Videodanza</div></h3>
                                        <div class="hover_inner">
                                          <h4>Xavi Murillo</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>  
              </div>
            </div>

            
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-productions">
              <div class="portfolio-content h-100">
                <div class="youtube_video_area">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                              <div class="single_video">
                                <div class="thumb">
                                    <img src="https://img.youtube.com/vi/Y_UuS9nQNiQ/hqdefault.jpg"  class="img-fluid" alt="">
                                </div>
                                <div class="hover_elements">
                                    <div class="portfolio-info">
                                      <div class="video">
                                          <a class="my-link" href="https://www.youtube.com/embed/Y_UuS9nQNiQ?autoplay=1" data-bs-toggle="modal" data-bs-target="#videoModal"> 
                                            <i class="bi bi-play"></i>
                                          </a>
                                      </div>
                                      <h3><div style="color: white;">Tras Sus Pasos</div></h3>
                                        <div class="hover_inner">
                                          <h4>Erick Romero l Video oficial ®</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>  
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-productions">
              <div class="portfolio-content h-100">
                <div class="youtube_video_area">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                              <div class="single_video">
                                <div class="thumb">
                                    <img src="https://img.youtube.com/vi/QhYt_ByueJU/hqdefault.jpg"  class="img-fluid" alt="">
                                </div>
                                <div class="hover_elements">
                                    <div class="portfolio-info">
                                      <div class="video">
                                          <a class="my-link" href="https://www.youtube.com/embed/QhYt_ByueJU?autoplay=1" data-bs-toggle="modal" data-bs-target="#videoModal"> 
                                            <i class="bi bi-play"></i>
                                          </a>
                                      </div>
                                      <h3><div style="color: white;">Eres - (Video lyric)</div></h3>
                                        <div class="hover_inner">
                                          <h4>Dia 3</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>  
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app filter-productions">
              <div class="portfolio-content h-100">
                <div class="youtube_video_area">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                              <div class="single_video">
                                <div class="thumb">
                                    <img src="https://img.youtube.com/vi/rhzFfUkYK30/hqdefault.jpg"  class="img-fluid" alt="">
                                </div>
                                <div class="hover_elements">
                                    <div class="portfolio-info">
                                      <div class="video">
                                          <a class="my-link" href="https://www.youtube.com/embed/rhzFfUkYK30?autoplay=1" data-bs-toggle="modal" data-bs-target="#videoModal"> 
                                            <i class="bi bi-play"></i>
                                          </a>
                                      </div>
                                      <h3><div style="color: white;">No me hace falta nada</div></h3>
                                        <div class="hover_inner">
                                          <h4>Dia 3</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>  
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-productions">
              <div class="portfolio-content h-100">
                <div class="youtube_video_area">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                              <div class="single_video">
                                <div class="thumb">
                                    <img src="https://img.youtube.com/vi/wgh5fAzMjFE/hqdefault.jpg"  class="img-fluid" alt="">
                                </div>
                                <div class="hover_elements">
                                    <div class="portfolio-info">
                                      <div class="video">
                                          <a class="my-link" href="https://www.youtube.com/embed/wgh5fAzMjFE?autoplay=1" data-bs-toggle="modal" data-bs-target="#videoModal"> 
                                            <i class="bi bi-play"></i>
                                          </a>
                                      </div>
                                      <h3><div style="color: white;">Dios</div></h3>
                                        <div class="hover_inner">
                                          <h4>La Estazion</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>  
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-productions">
              <div class="portfolio-content h-100">
                <div class="youtube_video_area">
                    <div class="container-fluid p-0">
                        <div class="row no-gutters">
                              <div class="single_video">
                                <div class="thumb">
                                    <img src="https://img.youtube.com/vi/hFAG4lTe3Tk/hqdefault.jpg"  class="img-fluid" alt="">
                                </div>
                                <div class="hover_elements">
                                    <div class="portfolio-info">
                                      <div class="video">
                                          <a class="my-link" href="https://www.youtube.com/embed/hFAG4lTe3Tk?autoplay=1" data-bs-toggle="modal" data-bs-target="#videoModal"> 
                                            <i class="bi bi-play"></i>
                                          </a>
                                      </div>
                                      <h3><div style="color: white;">Te esperaré</div></h3>
                                        <div class="hover_inner">
                                          <h4>La Estazion</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>  
              </div>
            </div>
            
            
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-direccion_procesos_musicales">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/direct_process_music/foto1.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Direccion de procesos musicales</h4>
                  <p>Soy Semilla (Nashville, EE. UU.)</p>
                  <a href="assets/img/portfolio/direct_process_music/foto1.jpeg" title="Soy Semilla (Nashville, EE. UU.)" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-direccion_procesos_musicales">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/direct_process_music/foto2.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Direccion de procesos musicales</h4>
                  <p>Soy Semilla (Nashville, EE. UU.)</p>
                  <a href="assets/img/portfolio/direct_process_music/foto2.jpeg" title="Soy Semilla (Nashville, EE. UU.)" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
            

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-direccion_procesos_musicales">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/direct_process_music/foto5.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Direccion de procesos musicales</h4>
                  <p>Soy Semilla (Nashville, EE. UU.)</p>
                  <a href="assets/img/portfolio/direct_process_music/foto5.jpeg" title="Soy Semilla (Nashville, EE. UU.)" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
            
            
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-direccion_procesos_musicales">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/direct_process_music/foto6.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Direccion de procesos musicales</h4>
                  <p>Soy Semilla (Nashville, EE. UU.)</p>
                  <a href="assets/img/portfolio/direct_process_music/foto6.jpeg" title="Soy Semilla (Nashville, EE. UU.)" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-direccion_procesos_musicales">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/direct_process_music/foto8.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Direccion de procesos musicales</h4>
                  <p>Soy Semilla (Nashville, EE. UU.)</p>
                  <a href="assets/img/portfolio/direct_process_music/foto8.jpeg" title="Soy Semilla (Nashville, EE. UU.)" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-direccion_procesos_musicales">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/direct_process_music/foto9.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Direccion de procesos musicales</h4>
                  <p>Soy Semilla (Nashville, EE. UU.)</p>
                  <a href="assets/img/portfolio/direct_process_music/foto9.jpeg" title="Soy Semilla (Nashville, EE. UU.)" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-direccion_procesos_musicales">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/direct_process_music/foto11.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Direccion de procesos musicales</h4>
                  <p>Soy Semilla (Nashville, EE. UU.)</p>
                  <a href="assets/img/portfolio/direct_process_music/foto11.jpeg" title="Soy Semilla (Nashville, EE. UU.)" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
            
            
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-direccion_procesos_musicales">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/direct_process_music/foto13.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Direccion de procesos musicales</h4>
                  <p>Soy Semilla (Nashville, EE. UU.)</p>
                  <a href="assets/img/portfolio/direct_process_music/foto13.jpeg" title="Soy Semilla (Nashville, EE. UU.)" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-direccion_procesos_musicales">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/direct_process_music/foto14.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Direccion de procesos musicales</h4>
                  <p>Soy Semilla (Nashville, EE. UU.)</p>
                  <a href="assets/img/portfolio/direct_process_music/foto14.jpeg" title="Soy Semilla (Nashville, EE. UU.)" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
            
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-direccion_procesos_musicales">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/direct_process_music/foto16.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Direccion de procesos musicales</h4>
                  <p>Soy Semilla (Nashville, EE. UU.)</p>
                  <a href="assets/img/portfolio/direct_process_music/foto16.jpeg" title="Soy Semilla (Nashville, EE. UU.)" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>

            
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-direccion_procesos_musicales">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/direct_process_music/foto17.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Direccion de procesos musicales</h4>
                  <p>Soy Semilla (Nashville, EE. UU.)</p>
                  <a href="assets/img/portfolio/direct_process_music/foto17.jpeg" title="Soy Semilla (Nashville, EE. UU.)" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>

            
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-direccion_procesos_musicales">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/direct_process_music/foto19.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Direccion de procesos musicales</h4>
                  <p>Soy Semilla (Nashville, EE. UU.)</p>
                  <a href="assets/img/portfolio/direct_process_music/foto19.jpeg" title="Soy Semilla (Nashville, EE. UU.)" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>

            
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-direccion_procesos_musicales">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/direct_process_music/foto20.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Direccion de procesos musicales</h4>
                  <p>Soy Semilla (Nashville, EE. UU.)</p>
                  <a href="assets/img/portfolio/direct_process_music/foto20.jpeg" title="Soy Semilla (Nashville, EE. UU.)" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>

            
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-direccion_procesos_musicales">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/direct_process_music/foto22.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Direccion de procesos musicales</h4>
                  <p>Soy Semilla (Nashville, EE. UU.)</p>
                  <a href="assets/img/portfolio/direct_process_music/foto22.jpeg" title="Soy Semilla (Nashville, EE. UU.)" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>

            
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-direccion_procesos_musicales">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/direct_process_music/foto27.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Direccion de procesos musicales</h4>
                  <p>Soy Semilla (Nashville, EE. UU.)</p>
                  <a href="assets/img/portfolio/direct_process_music/foto27.jpeg" title="Soy Semilla (Nashville, EE. UU.)" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>

            
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-direccion_procesos_musicales">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/direct_process_music/foto25.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Direccion de procesos musicales</h4>
                  <p>Soy Semilla (Nashville, EE. UU.)</p>
                  <a href="assets/img/portfolio/direct_process_music/foto25.jpeg" title="Soy Semilla (Nashville, EE. UU.)" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>

            
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-direccion_procesos_musicales">
              <div class="portfolio-content h-100">
                <img src="assets/img/portfolio/direct_process_music/foto30.jpeg" class="img-fluid" alt="">
                <div class="portfolio-info">
                  <h4>Direccion de procesos musicales</h4>
                  <p>Soy Semilla (Nashville, EE. UU.)</p>
                  <a href="assets/img/portfolio/direct_process_music/foto30.jpeg" title="Soy Semilla (Nashville, EE. UU.)" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                </div>
              </div>
            </div>
            <!-- End Portfolio Item -->
          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section><!-- /Portfolio Section -->

    <!-- Services Section -->
    <section id="services" class="services section gray-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Servicios</h2>
      </div><!-- End Section Title -->

      <div class="container">
        <div class="row gy-4">
          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="100">
            <div class="icon flex-shrink-0"><i class="bi bi-book"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Enseñanza Musical</a></h4>
              <p class="description">Clases de piano, teclado, teoría musical y estimulación musical para todas las edades, de nivel básico a avanzado.</p>
            </div>
          </div>
          <!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="200">
            <div class="icon flex-shrink-0"><i class="bi bi-music-note-beamed"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Música en vivo para bodas y eventos</a></h4>
              <p class="description">Acompañamiento musical personalizado en ceremonias, recepciones y celebraciones, creando un ambiente único con piano y teclados.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="300">
            <div class="icon flex-shrink-0"><i class="bi bi-sliders"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Producción Musical Profesional</a></h4>
              <p class="description">Arreglos, mezcla, masterización y dirección musical para proyectos individuales o de bandas.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="400">
            <div class="icon flex-shrink-0"><i class="bi bi-music-note-list"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Composición Original</a></h4>
              <p class="description">Música a la medida para cine, cortometrajes, teatro, danza y proyectos audiovisuales.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="500">
            <div class="icon flex-shrink-0"><i class="bi bi-broadcast"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Orquestación y Dirección Musical</a></h4>
              <p class="description">Creación y dirección de arreglos orquestales y corales para conciertos, grabaciones y espectáculos.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
            <div class="icon flex-shrink-0"><i class="bi bi-keyboard"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Interpretación de Piano y Teclados</a></h4>
              <p class="description">Presentaciones como pianista solista o acompañante, en géneros que van desde el jazz hasta la música académica y popular.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
            <div class="icon flex-shrink-0"><i class="bi bi-people"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Colaboraciones Artísticas</a></h4>
              <p class="description">Participación como teclista, arreglista o productor en proyectos musicales nacionales e internacionales.</p>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6 service-item d-flex" data-aos="fade-up" data-aos-delay="600">
            <div class="icon flex-shrink-0"><i class="bi bi-people"></i></div>
            <div>
              <h4 class="title"><a href="service-details.html" class="stretched-link">Dirección y gestión de procesos musicales</a></h4>
              <p class="description">Creación y administración de programas de enseñanza musical adaptados a cada edad y nivel musical.</p>
            </div>
          </div><!-- End Service Item -->
        </div>
      </div>

    </section><!-- /Services Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section light-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Testimonios</h2>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="swiper init-swiper">
          <script type="application/json" class="swiper-config">
            {
              "loop": true,
              "speed": 600,
              "autoplay": {
                "delay": 10000
              },
              "slidesPerView": "auto",
              "pagination": {
                "el": ".swiper-pagination",
                "type": "bullets",
                "clickable": true
              },
              "breakpoints": {
                "320": {
                  "slidesPerView": 1,
                  "spaceBetween": 40
                },
                "1200": {
                  "slidesPerView": 3,
                  "spaceBetween": 1
                }
              }
            }
          </script>
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bi bi-quote quote-icon-left"></i>
                  <span>Queremos agradecer a Javier Murillo, por acompañarnos el dia de nuestra boda, gracias por el apoyo incondicional, adicionalmente recomendarlo por la gran persona que es, en lo personal y laboral. Gracias por todo Profe</span>
                  <i class="bi bi-quote quote-icon-right"></i>
                </p>
                    <div class="portfolio-content h-100">
                      <img src="assets/img/testimonials/DSC_3910.jpg" class="testimonial-img" alt="">
                      <div class="portfolio-info">
                        <a href="assets/img/testimonials/DSC_3910.jpg" title="Boda Dani y Migue" data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                      </div>
                    </div>
                <h3>Boda Dani y Migue</h3>
                <h4>5 Oct 2024</h4>
              </div>
            </div><!-- End testimonial item -->

            
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>

    </section><!-- /Testimonials Section -->

    <!-- Contact Section -->
    <section id="contact" class="contact section dark-background">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Contactame</h2>
        <!-- <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p> -->
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-5">

            <div class="info-wrap">
              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="200">
                <i class="bi bi-geo-alt flex-shrink-0"></i>
                <div>
                  <h3>Dirección</h3>
                  <p>Calle 9a, # 1 - 27 sur. Facatativá, Colombia</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                <i class="bi bi-telephone flex-shrink-0"></i>
                <div>
                  <h3>Llamanos</h3>
                  <p>+57 3103000124</p>
                </div>
              </div><!-- End Info Item -->

              <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                <i class="bi bi-envelope flex-shrink-0"></i>
                <div>
                  <h3>Envianos un correo</h3>
                  <p>xavimurillo7@gmail.com</p>
                </div>
              </div><!-- End Info Item -->

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31806.21933264724!2d-74.36609840535672!3d4.808239005716654!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f7c5fb29436d7%3A0xee2cd73daf20759c!2sFacatativ%C3%A1%2C%20Cundinamarca!5e0!3m2!1ses-419!2sco!4v1754786593967!5m2!1ses-419!2sco" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
          </div>

          <div class="col-lg-7">
            <form action="forms/contact.php" method="post" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
              <div class="row gy-4">

                <div class="col-md-6">
                  <label for="name-field" class="pb-2">Nombre</label>
                  <input type="text" name="name" id="name-field" class="form-control" required="">
                </div>

                <div class="col-md-6">
                  <label for="email-field" class="pb-2">Correo Electrónico</label>
                  <input type="email" class="form-control" name="email" id="email-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="subject-field" class="pb-2">Asunto</label>
                  <input type="text" class="form-control" name="subject" id="subject-field" required="">
                </div>

                <div class="col-md-12">
                  <label for="message-field" class="pb-2">Mensaje</label>
                  <textarea class="form-control" name="message" rows="10" id="message-field" required=""></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Cargando</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Tu mensaje ha sido enviado. Muchas gracias!</div>

                  <button type="submit">Enviar Mensaje</button>
                </div>

              </div>
            </form>
          </div><!-- End Contact Form -->

        </div>

      </div>

    </section><!-- /Contact Section -->

  </main>

  <footer id="footer" class="footer position-relative dark-background">

    <div class="container">
      <div class="copyright text-center ">
        <p>© <span>Copyright</span> <strong class="px-1 sitename">iPortfolio</strong> <span>All Rights Reserved</span></p>
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you've purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a> Distributed by <a href="https://themewagon.com">ThemeWagon</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  
<!-- Modal Structure -->
<div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="videoModalLabel">YouTube Video</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="ratio ratio-16x9">
        <div class="mfp-iframe-scaler">
          <div class="mfp-close"></div>
          <iframe id="videoFrame"
                  width="560" 
                  height="315" 
                  src="" 
                  title="YouTube video player" 
                  frameborder="0"
                  allow="autoplay;" 
                  referrerpolicy="strict-origin-when-cross-origin"
                  allowfullscreen>
              </iframe>
            </div>  
        </div>
      </div>
    </div>
  </div>
</div>


<!-- Modal Structure -->
<div class="modal fade" id="newsModal" tabindex="-1" aria-labelledby="newsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newsModalLabel">Visor de Noticias</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="ratio ratio-16x9">
        <div class="mfp-iframe-scaler">
          <div class="mfp-close"></div>
          <iframe id="newsFrame"
                  width="560" 
                  height="315" 
                  src="" 
                  title="YouTube video player" 
                  frameborder="0"
                  allow="autoplay;" 
                  referrerpolicy="strict-origin-when-cross-origin"
                  allowfullscreen>
              </iframe>
            </div>  
        </div>
      </div>
    </div>
  </div>
</div>
  <!-- Vendor JS Files -->
   
  <script src="assets/js/jquery-1.12.4.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/typed.js/typed.umd.js"></script>
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/js/jquery.magnific-popup.min.js"></script>

  <!-- Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<?php
$conn->close();
?>

