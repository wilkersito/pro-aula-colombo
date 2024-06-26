<?php
session_start();

if (empty($_SESSION["id"])) {
    header("location: login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="nosotros.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>


    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cinzel:wght@600&display=swap" rel="stylesheet">
    <title>Nosotros</title>
</head>

<body>
    <div class="div-padre">

        <header class="header">

            <div class="menu margen-interno">
                <div class="logo">
                    <a href="index.php"><img src="imagenes/004.png" alt=""></a>
                </div>

                <div class="nav">
                    <a href="Index.php">Inicio</a>
                    <a href="nosotros.html" class="here">Nosotros</a>
                    <a href="excursion.php">Excursiones</a>
                    <a href="#"  id="btn-abrir-modal" >Cuenta</a>
                </div>

                <div class="social">
                    <div><a href="https://x.com/senderoDeNomada"><i class="fa-brands fa-twitter fa-2xl"></i></a></div>
                    <div><a href="https://www.instagram.com/senderodenomada/"><i class="fa-brands fa-instagram fa-2xl"></i></a></div>
                </div>

            </div>

            <div class="new-Body">
                <div class="typewriter">
                    <br>
                    <br>
                    <h1>Descubre más sobre nosotros</h1>

                </div>

            </div>

        </header>



        <section class="principal">
            <div class="informacion">
                <div class="contenedor">
                    <div class="textx">

                        <h1 class="h11">Nuestra Misión</h1>
                        <p class="p2">En Sendero Nómada, nuestra misión es ofrecer experiencias transformadoras a través
                            de excursiones a destinos fascinantes y remotos. Nos comprometemos a conectar a las personas
                            con la naturaleza, las culturas locales y consigo mismas, proporcionando aventuras
                            inolvidables que enriquecen el alma y promueven un mayor entendimiento del mundo.</p>
                    </div>
                </div>
                <div class="contenedor">
                    <div class="textx">

                        <h1 class="h11">Nuestra visión</h1>
                        <p class="p2">Nuestra visión es ser reconocidos como líderes en la industria del turismo de
                            aventura, inspirando a viajeros de todas las edades y orígenes a explorar el mundo de una
                            manera responsable y significativa. Aspiramos a ser una fuerza para el bien, promoviendo la
                            conservación del medio ambiente y el respeto por las comunidades locales en cada destino que
                            visitamos.</p>
                    </div>
                </div>
            </div>


            <section class="container">

                <div class="texto-Excursiones">
                    <h1 class="h11">
                        ¡Acompañanos en nuestras aventuras!
                    </h1>

                </div>

                <div class="slider-wrapper">

                    <div class="slider">
                        <img id="slide-1" src="imagenes/Galeria7.png" alt="">
                        <img id="slide-2" src="imagenes/Galeria2.png" alt="">
                        <img id="slide-3" src="imagenes/Galeria3.png" alt="">
                        <img id="slide-4" src="imagenes/Galeria4.png" alt="">
                        <img id="slide-5" src="imagenes/Galeria5.png" alt="">
                        <img id="slide-6" src="imagenes/Galeria6.png" alt="">
                        <img id="slide-7" src="imagenes/Galeria1.png" alt="">
                    </div>
                    <div class="slider-nav">
                        <a href="#slide-1"></a>
                        <a href="#slide-2"></a>
                        <a href="#slide-3"></a>
                        <a href="#slide-4"></a>
                        <a href="#slide-5"></a>
                        <a href="#slide-6"></a>
                        <a href="#slide-7"></a>
                    </div>
                </div>

            </section>


            <section class="secundario">

                <div class="informacion">
                    <div class="contenedorImagen">

                        <div class="ima">
                            <img src="imagenes/Galeria4.png" alt="" class="im2">
                        </div>

                    </div>

                    <div class="contenedorObjetivos">

                        <h1 class="h1Objetivos">ꕤ Nuestros objetivos ꕤ</h1>
                        <div class="obj">
                            <p class="Parrafo-objetivos"> ꕤ Ofrecer experiencias auténticas y únicas que superen las
                                expectativas de nuestros
                                clientes.</p>
                        </div>

                        <div class="obj">
                            <p class="Parrafo-objetivos"> ꕤ Fomentar un turismo sostenible y ético, minimizando nuestro
                                impacto ambiental y
                                apoyando el desarrollo local.</p>
                        </div>

                        <div class="obj">
                            <p class="Parrafo-objetivos"> ꕤ Promover la diversidad cultural y el intercambio
                                intercultural en todas nuestras
                                excursiones.</p>
                        </div>

                        <div class="obj">
                            <p class="Parrafo-objetivos"> ꕤ Priorizar la seguridad y el bienestar de nuestros viajeros
                                en todo momento.</p>
                        </div>

                        <div class="obj">
                            <p class="Parrafo-objetivos"> ꕤ Inspirar y educar a nuestros clientes sobre la importancia
                                de la conservación del
                                medio ambiente.</p>
                        </div>

                    </div>

            </section>


            <h1 class="h1lideres">ꕤ Nuestros Lideres de excursiones ꕤ</h1>

            <section class="container-lideres ">

                <div class="lideres">
                    <h2>ꕤ Claire Redfield ꕤ</h2>
                    <center> <img src="imagenes/L1.png" alt=""> </center>
                    <p>Es conocida por su coraje, determinación y
                        habilidades de liderazgo excepcionales. Ha liderado numerosas expediciones, guiando equipos a
                        través de terrenos desafiantes con facilidad. Su capacidad para formular
                        estrategias y tomar decisiones rápidas le ha ganado el respeto y la admiración de sus colegas.
                    </p>
                </div>

                <div class="lideres">
                    <h2>ꕤ Ruka Yoshida ꕤ</h2>

                    <center> <img src="imagenes/L2.png" alt=""> </center>
                    <p> Es conocida por tener una trayectoria impresionante en el campo de la exploración, Ruka ha
                        guiado a equipos a través de gelidas tierras y más. Su habilidad para motivar y liderar a su
                        equipo, la han convertido en una líder de expediciones altamente respetada y amada.</p>

                </div>

                <div class="lideres">
                    <h2>ꕤ Xiaomao Lee ꕤ</h2>

                    <center> <img src="imagenes/L3.png" alt=""> </center>
                    <p>Es conocida porque su liderazgo se basa en su habilidad para tomar decisiones rápidas y precisas,
                        incluso en
                        situaciones de alta presión. A pesar de su juventud, Xiaomao ha demostrado una y otra vez su
                        valentia y determinación en el campo, lo que ha llevado a que sus compañeros le respeten y
                        admiren profundamente. </p>
                </div>

                <div class="lideres">
                    <h2>ꕤ Juan Ponce de León ꕤ</h2>
                    <center> <img src="imagenes/L4.png" alt=""> </center>

                    <p>Es conocido por su gran trayectoria en la exploración de nuevas tierras, Su espíritu aventurero y
                        su valentía
                        le gusta enfrentar desafíos en terrenos difíciles. Su historia y logros lo han convertido en un
                        ejemplo a seguir para aquellos que buscan emprender aventuras y descubrir nuevas fronteras.</p>
                </div>

                <div class="lideres">
                    <h2>ꕤ Michael Smith ꕤ</h2>
                    <center> <img src="imagenes/L5.png" alt=""> </center>
                    <p>Es conocido por su pasión por la naturaleza y su habilidad para conectarse con los miembros de su
                        equipo lo han llevado a liderar exitosamente numerosas expediciones. Su nombre está asociado con
                        la pasión por la naturaleza y su compromiso con el
                        medio ambiente lo han convertido en un líder respetado y admirado. </p>

                </div>

                <div class="lideres">
                    <h2>ꕤ Yoo Gong ꕤ</h2>
                    <center> <img src="imagenes/L6.png" alt=""> </center>
                    <p> Su enfoque centrado en el trabajo en equipo y la colaboración ha creado
                        un ambiente de confianza y respeto entre sus compañeros, lo que ha llevado a establecer
                        relaciones duraderas y a lograr resultados sobresalientes en cada una de sus aventuras,
                        permitiendo a su
                        equipo a alcanzar las metas propuestas en cada
                        una de sus expediciones.</p>

                </div>
            </section>

        </section>

        <dialog id="modal">
            <?php	
            echo "<h1 class='bv'>  Bienvenido/a " . $_SESSION["nombres"] . " ". $_SESSION['apellidos']. "</h1> <br>";

            echo "
            <div  class='informacionUsuario'>
            <h2 class='Infor'>Datos personales</h2>
            <li>
                <ol>Correo: ". $_SESSION["email"]."</ol>
                <ol>Contraseña: ".$_SESSION["contraseña"] ."</ol>
                <ol>Nacionalidad: ".$_SESSION["Nacionalidad"] ."</ol>
                <ol>Edad: ".$_SESSION["edad"] . "</ol>
                <ol>Numero telefonico: ".$_SESSION["celular"] ."</ol>
            </li>
            </div>             
            ";                    
    
            ?>

            <br>                    
            <div class="controlC">
            <center><a href="carrito.php" class="submit-btn">Carrito</a></center>                   
            <center><a href="php/controlador_cerrar_session.php" class="submit-btn b2">Cerrar sesion</a></center>
            </div>
           

        </dialog>



        <script>
            const btnAbrirModal =
            document.querySelector("#btn-abrir-modal");

            const Modal =
            document.querySelector("#modal");


            btnAbrirModal.addEventListener("click", ()=>{
                Modal.showModal();
            });

        </script>

        <footer class="footer margen-interno">
            <nav class="pie">
                <a href="#">Desarrollado por Wavy </a>
            </nav>
        </footer>
    </div>
</body>

</html>