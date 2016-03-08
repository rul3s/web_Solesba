<h2>Galeria de imágenes</h2>

<div id="gallery">
    <?php
    $dir = "res/img/bar";
    $files = scandir('res/img/bar');
    unset($files[0]);unset($files[1]);
    foreach($files as $file) {
        $ref = $dir . "/" .$file;
        echo "<figure class=\"galleryFig\"><a href=\"image.php?ref=$ref\"><img src=\"$ref\" alt=\"img\"></a></figure>";
    }
    ?>
</div>