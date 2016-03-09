
<h2><a class="none" href="index.php?section=gallery">Galeria de imágenes</a></h2>

<div id="gallery">

    <?php

        if(!isset($_GET["type"])){
            include 'selectGallery.php';
        }else{
            $type = $_GET["type"];
            $dir = "res/img/$type";
            $files = scandir($dir);
            unset($files[0]);unset($files[1]);
            foreach($files as $file) {
                $ref = $dir . "/" .$file;
                echo "<figure class=\"galleryFig\"><a href=\"image.php?ref=$ref\"><img src=\"$ref\" alt=\"img\"></a></figure>";
            }
        }
    ?>
</div>
