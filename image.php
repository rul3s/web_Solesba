<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Escaleras y barandillas</title>
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/default.css">
    <link rel="stylesheet" href="css/gallery.prefixed.css">
    <link href='https://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Laila' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oleo+Script' rel='stylesheet' type='text/css'>
</head>
<body>
<header>
    <figure><a href="index.php"><img src="res/img/logo.png" alt="logoSolesba"></a></figure>
    <h1>Escaleras & Barandillas</h1>
</header>

<section id="image">
    <?php
        $dir = "res/img/bar";
        if (isset($_GET["ref"]))$ref = $_GET["ref"];
        else $ref="picture not found";

        echo "<figure class=\"galleryFig\"><img src=\"$ref\" alt=\"img\"></figure>";
    ?>

    <a href="index.php?section=gallery">Volver</a>
</section>
</body>
</html>

