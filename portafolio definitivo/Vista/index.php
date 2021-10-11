<!DOCTYPE html>
<html lang="es">
<head>
    
    <link rel="stylesheet" href="css/style.css">
    <title>Portafolio Del Programador</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
<!--parte 1 inicio  -->

<header class="parte-1">

    <div class="user">
        <img src="../img/Foto-inicio.jpg" alt="">
        <h3>Juan Enciso Sarmiento</h3>
        <p>Aprendiz De programador</p>
    </div>

    <nav class="navbar">
        <a href="#home">Inicio</a>
        <a href="#about">sobre mi</a>
        <a href="#portfolio">Portafolio</a>
    </nav>

</header>

<!-- Parte 1 fin -->

<div id="menu-btn" class="fas fa-bars"></div>

<!-- Tema Oscuro -->

<div id="theme-toggler" class="fas fa-moon"></div>

<!-- Tema Oscuro Fin -->

<!-- Inicio -->
<section class="home" id="home">

    <div class="content">
        <h3>Juan Sebastian Enciso Sarmiento</h3>
        <p>Soy un Aprendiz De Progración</p>
        <a href="https://github.com/jsenciso45/SGproyect" class="btn">Enlace GitHub</a>
    </div>

</section>

<!-- Inicio Fin -->

<!-- about section inicio -->

<section class="about" id="about">

    <h1 class="heading"> Mi <span> informacion </span>  </h1>

    <div class="row">
        <div class="content">
            <h3>Mi nombre es <span>Juan Sebastian Enciso Sarmiento</span></h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil hic eum magnam, ea nulla sit cumque explicabo dolorem illo itaque?</p>
        </div>
    </div>

    <div class="row">

        <div class="progress ">
            <h3> HTML <span>60%</span> </h3>
            <div class="bar bar-1"><span></span></div>
            <h3> CSS <span>60%</span> </h3>
            <div class="bar bar-2"><span></span></div>
        </div>

        <div class="progress ">
            <h3> web design <span>50%</span> </h3>
            <div class="bar bar-3"><span></span></div>
            <h3> javascript <span>35%</span> </h3>
            <div class="bar bar-4"><span></span></div>
        </div>
    </div>

</section>

<!-- about section Fin -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

    <h1 class="heading"> Mi <span>Portafolio</span> </h1>

    <div class="box-container">

        <div class="box">
            <img src="../img/crud.png" alt="">
            <div class="content">
                <a href="../crud/indexCrud.php"><h3>Crud</h3></a>
            </div>
        </div>

        <div class="box">
            <img src="../img/js.jpg" alt="">
            <div class="content">
            <a href="indexEjer.php"><h3>Ejercicios JavaScript</h3></a>
            </div>
        </div>

        <div class="box">
            <img src="../img/manual.png" alt="">
            <div class="content">
            <a href="indexManual.php"><h3>Manual De Usuario</h3></a>
            </div>
        </div>
    </div>

</section>

<!-- portfolio section ends -->


<!-- Creditos -->
<div class="creditos"> Creado Por <span> Juan Sebastian Enciso Sarmiento</span> | Todos Los Derechos Reservados </div>
<!-- link Jv  -->

<script src="../js/script.js"></script>

</body>
</html>