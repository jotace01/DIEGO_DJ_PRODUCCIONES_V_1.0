<?php
session_start();
if (isset($_POST["user"]) && isset($_POST["pass"])) {
    include_once("./usuario.php");
    $users = new usuario($_POST["user"], $_POST["pass"]);

    if ($users->iniciar_sesion() == 1) {
        $_SESSION["status"] = true;
        header("Location: ./home.php");
    } else {
        echo "Usuario y/o Contraseña incorrectos <i class='bi bi-emoji-frown'></i><br>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Diego Dj Producciones</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="./style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Diego Dj Producciones</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="estilos.css">
    <script src="https://kit.fontawesome.com/e6d3741188.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="boton_neon.css">
    <!-- <link rel="stylesheet" href="link rel= " preconnect href="https://fonts.googleapis.com"> -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bangers&family=Bungee&family=Faster+One&family=Kenia&family=Rubik+Glitch&family=Unlock&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Mono+One&display=swap" rel="stylesheet">
    <!-- <link rel="stylesheet" href="calificacion/calificacion.css"> -->
    <!-- <link rel="stylesheet" href="styles.css"> Vincula el archivo CSS -->
</head>

<body class="hidden">
    <div class="centrado" id="onload">
        <div class="lds-facebook"></div>
    </div>

    <header>
        <nav id="nav" class="nav1">
            <div class="contenedor-nav">
                <div class="logo">
                    <img src="img/logo.png" alt="">
                </div>
                <div class="enlaces" id="enlaces">

                    <a href="#" id="enlace-inicio" class="btn-header">Inicio</a>
                    <a href="#" id="enlace-equipo" class="btn-header">Promociones</a>
                    <a href="#" id="enlace-trabajo" class="btn-header">Catalogo</a>
                    <a href="pagina2.html" id="enlace-servicio" class="btn-header">Quienes Somos</a>
                    <a href="#" id="enlace-contacto" class="btn-header">Contactanos</a>

                </div>

                <a href="registro/index.php" id="registro" class="btn-header">Agenda Tu <br>Evento Aqui</a>

                <div class="icono" id="open">
                    <span>&#9776;</span>
                </div>
            </div>
        </nav>
        <div class="textos">
            <h1>Diego Dj
                <p>Producciones</p>
            </h1>

            <h2>Dejando Huella Donde Vamos </h2>
        </div>


    </header>
    <main>
        <section class="team contenedor" id="equipo">
            <h3>Nuestras Promociones</h3>
            <h3>
                <p class="after">Conoce nuestros planes premium</p>
            </h3>
            <div class="card">
                <div class="content-card">
                    <div class="people">
                        <img src="img/platino.jpg" alt="">
                    </div>
                    <div class="texto-team">
                        <h3>PLAN PLATINO</h3>
                        <p>CONOCE TODO NUESTRO PAQUETE COMPLETO</p>
                    </div>
                </div>

                <div class="content-card">
                    <div class="people">
                        <img src="img/vip.jpg" alt="">
                    </div>
                    <div class="texto-team">
                        <h3>PLAN VIP</h3>
                        <p></p>
                    </div>
                </div>
                <div class="content-card">
                    <div class="people">
                        <img src="img/dorado.jpg" alt="">
                    </div>
                    <div class="texto-team">
                        <h3>PLAN DORADO</h3>
                        <p>Lorem ipsum dolor sit.</p>
                    </div>
                </div>
                <!--agrego un nuevo content-card a mi gusto-->
                <div class="content-card">
                    <div class="people">
                        <img src="img/otros planes.jpg" alt=""> <!--cambio imagen-->
                    </div>
                    <div class="texto-team">
                        <h3>OTROS PLANES</h3>
                        <p></p>
                    </div>
                </div>


        </section>

        <section class="work contenedor" id="trabajo">
            <h3>Realizamos Todo Tipo De Evento</h3>
            <h2>
                <p class="after">Ajustandonos A Tus Necesidades</p>
            </h2>
            <div class="botones-work">
                <ul>
                    <li class="filter active" data-nombre='todos'>Todos</li>
                    <li class="filter" data-nombre='diseño'>Sonido y luces</li>
                    <li class="filter" data-nombre='programacion'>Buffets y Decoración</li>
                    <li class="filter" data-nombre='marketing'>Fotografia y Videos Efectos especiales</li>
                </ul>
            </div>
            <div class="galeria-work">
                <div class="cont-work programacion">
                    <div class="img-work">
                        <img src="img/buffets.jpeg" alt="">
                    </div>
                    <div class="textos-work">
                        <h3>Buffets</h3>
                    </div>
                </div>
                <div class="cont-work programacion">
                    <div class="img-work">
                        <img src="img/cocteles.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h3>Cocteles</h3>
                    </div>
                </div>
                <div class="cont-work programacion">
                    <div class="img-work">
                        <img src="img/decoracion 1.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h3>Decoracion</h3>
                    </div>
                </div>
                <div class="cont-work diseño">
                    <div class="img-work">
                        <img src="img/diseño1.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h3>Tecnologia</h3>
                    </div>
                </div>
                <div class="cont-work diseño">
                    <div class="img-work">
                        <img src="img/diseño2.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h3>Sonido Profesional</h3>
                    </div>
                </div>
                <div class="cont-work diseño">
                    <div class="img-work">
                        <img src="img/diseño3.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h3>Efectos Especiales</h3>
                    </div>
                </div>
                <div class="cont-work marketing">
                    <div class="img-work">
                        <img src="img/efectos especiales 1.jpeg" alt="">
                    </div>
                    <div class="textos-work">
                        <h3>Pista De Baile</h3>
                    </div>
                </div>
                <div class="cont-work marketing">
                    <div class="img-work">
                        <img src="img/pistas leds.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h3>Pistas Leds</h3>
                    </div>
                </div>
                <div class="cont-work marketing">
                    <div class="img-work">
                        <img src="img/tematicas.jpg" alt="">
                    </div>
                    <div class="textos-work">
                        <h3>Tematicas</h3>
                    </div>
                </div>
            </div>
        </section>


        <!-- contenedor cajon quienes somos  -->
        <section class="about" id="servicio">
            <div class="contenedor">
                <h3>¿Quienes Somos?</h3>
                <p class="after">Una Organizacion De Eventos Para Toda Ocasion</p>
                <div class="servicios">
                    <div class="caja-servicios">
                        <img src="img/heart.png" alt="">
                        <h4>Mision</h4>
                        <p>Nuestra mision es brindar un servicio completo y de calidad en la organizacion de eventos</p>
                    </div>
                    <div class="caja-servicios">
                        <img src="img/responsive.png" alt="">
                        <h4>Vision</h4>
                        <p>ser reconocidos como lideres en la planificacion y ejecucion de eventos espectaculares y sobresalientes</p>
                    </div>
                    <div class="caja-servicios">
                        <img src="img/efectos.png" alt="">
                        <h4>Nuestro Objetivo</h4>
                        <p>Acompañamos a nuestros clientes en los momentos mas memorables de sus vidas</p>
                    </div>
                </div>



        </section>
    </main>
    <footer id="contacto">
        <div class="footer contenedor">
            <div class="marca-logo">
                <img src="img/logo.png" alt="">
            </div>

            <div class="footer contenedor">
                <h2>SIGUENOS EN NUESTRAS REDES SOCIALES<br><br></h2>
            </div>

            <button>
                <a href="https://www.instagram.com/diegodjproducciones?igsh=cjJzdnh3Ym9xaTEx">
                    <span>Instagram</span>
                </a>
            </button>

            <button>
                <a href="https://wa.me/+573124601121">
                    <span>WhatsApp</span>
                </a>
            </button>

            <button>
                <a href="mailto:diegodjproducciones@gmail.com">
                    <span>Correo</span>
                </a>
            </button>


            <!-- partial -->

            <div>

                <h3>
                    <p>Tu Entretenimiento Es Nuestra Prioridad</p>
                </h3>
                <h2>
                    <p>Diseño De Proyecto De Software
                        Apendices (Diego Murillo, Diana Mahecha,Cindy Gonzales y Julio C hdez)</p>
                </h2>
            </div>

    </footer>
    <script src="js/jquery.js"></script>
    <script src="js/main.js"></script>
    <script src="js/filtro.js"></script>
    <script src="./script.js"></script>
</body>

</html>