<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="author" description="Raül Valls">
    <meta name="description" content="Solesba, fabricantes e instaladores de Escaleras y Barandillas desde 1980">
    <meta name="keywords" content="Solesba, Escaleras, Barandillas, Fabricantes, Instaladores">
    <title>SOLESBA - Escaleras y barandillas</title>
    <link rel="icon" href="res/img/icon.png">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/gallery.prefixed.css">
</head>
<body>
    <header>
        <figure><a href="index.php"><img src="res/img/logo.png" alt="logoSolesba"></a></figure>
        <h1>Escaleras & Barandillas</h1>
    </header>

    <?php
    include 'slideshow.php';
    ?>

    <nav>
        <ul>
            <li><a class="none" href="index.php">NUESTRA EMPRESA</a></li>
            <li><a class="none" href="index.php?section=gallery">GALERÍA</a></li>
            <li><a class="none" href="index.php?section=contact">CONTACTO</a></li>
        </ul>
    </nav>

    <section>

    <?php
        if (isset($_GET['section'])){
            $section = $_GET['section'];
        }else $section = "";

        if($section == "gallery"){ include 'gallery.php';
        }else if ($section == "contact") { include 'contact.php';
        }else include 'main.php';
    ?>

    </section>

    <footer class="font3">
        <p class="left">Todos los derechos reservados &copy; &nbsp;&nbsp;&nbsp;Solesba 1980 - 2016 &reg; </p>
        <p class="right">Web Design by <a class="none" href="http://www.rul3s.es">RVS Web Services</a></p>
        <hr>
    </footer>
</body>
</html>

