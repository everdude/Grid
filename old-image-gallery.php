<?php $gallery = true ?>
<!DOCTYPE html>
<html>
    <head>
        <?php require_once('includes/metadata.php'); ?>
        <title>Image Gallery - <?php echo $siteTitle; ?></title>
        <meta name="keywords" content="">
        <meta name ="descrption" content="">
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
        				<ul class="thumbnail-gallery gallery">
            <?php
                    }
                    list($width, $height) = getimagesize($image);
                    $ratio = $width / $height;
            ?>
                    <li class="gallery-item
                        <?php
                            if ($ratio > "2.5") {
                                echo 'wide';
                            }
                            elseif ($ratio < ".5") {
                                echo 'tall';
                            }
                        ?>
                        "
                    >
                        <!-- <p>width: <?php echo $width;?> height: <?php echo $height;?> ratio: <?php echo $ratio;?></p> -->
                        <a href="#gallery" rel="gallery_image" onclick="getElementById('gallery').src=getElementById('thumb<?php echo $i; ?>').src;">
        				<img alt="" src="<?php echo $image; ?>">
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
