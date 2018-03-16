<!DOCTYPE html>
<html>
    <head>
        <title>Image Gallery - CSS Grid Layout</title>
        <meta name="keywords" content="">
        <meta name ="descrption" content="">
        <?php require_once('includes/metadata.php'); ?>
    </head>
    <?php require_once('includes/header.php'); ?>
        <article id="content">
            <h1>Image Gallery</h1>
            <p>maybe instead see if i can do these using grid and add some more of my artwork for images. Then do a write up on how it works. maybe on a subpage or something.</p>
            <div class="gallery">
            <?php
                $dirName = "images/gallery/";
                $images = glob($dirName."*{jpg, png, gif, jpeg}", GLOB_BRACE);
                $numItems = count($images);
                $i = 0;

                foreach($images as $image){
                    if($i == 0){
            ?>
                        <p><img alt="" id="gallery" src="<?php echo $image; ?>"></p>
        				<ul class="thumbnail-gallery">
            <?php
                    }
            ?>
                    <li>
                        <a href="#" onclick="getElementById('gallery').src=getElementById('thumb<?php echo $i; ?>').src;">
        				<img alt="" id="thumb<?php echo $i; ?>" src="<?php echo $image; ?>">
                        </a>
        			</li>
            <?php
                    if($i == $numItems){ ?>
                        </ul>
            <?php
                    }
                    $i++;
                }
            ?>
            </div>
        </article>
        <aside id="sideBar">
            <p>could put the link to the writeup here or something.</p>
        </aside>
        <?php require_once('includes/footer.php'); ?>
    </body>
</html>
