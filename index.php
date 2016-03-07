<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Escaleras y barandillas</title>
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/standard.css">
    <link href='https://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Laila' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
</head>
<body>
    <header>
        <figure><img src="res/img/logo.png" alt?="logoSolesba"></figure>
        <h1>Escaleras & Barandillas</h1>
    </header>

    <div id="slideShow">
        <img src="res/img/barandillas/bar%20(1).JPG" alt="slideshow">
    </div>

    <nav>
        <ul>
            <li>MENU</li>
            <li><a href="index.php">NUESTRA EMPRESA</a></li>
            <li><a href="index.php?section=gallery">GALERÍA</a></li>
            <li><a href="index.php?section=contact">CONTACTO</a></li>
        </ul>
    </nav>

    <section>

    <?php
        if (isset($_GET['section'])){
            $section = $_GET['section'];
        }else $section = "";

        if($section == "gallery"){ include 'sections/gallery.php';
        }else if ($section == "contact") { include 'sections/contact.php';
        }else include 'sections/main.php';
    ?>

    </section>

    <footer class="font3">
        Solesba 1980 - 2016
    </footer>
</body>
</html>

