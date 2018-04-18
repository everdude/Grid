<?php
require_once("config.php");
$gallery = true
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once(SITE_ROOT.'/includes/metadata.php'); ?>
        <title>Fine Art Gallery - <?php echo $siteTitle; ?></title>
        <meta name="keywords" content="CSS Grid Layout, Portraits, Drawings, CSS Grid, Grid, Image Gallery, Gallery, Artwork, Fine Art, Oil Pastels, Adobe Illustrator, Charcoal, Sketch, vector art, gradient mesh">
        <meta name ="descrption" content="">
    </head>
    <?php require_once(SITE_ROOT.'/includes/header.php'); ?>
        <article id="content">
            <h1>Fine Art Gallery</h1>
            <p>A sampling of some of my artwork I have created over the years. Something about different types of media I enjoy the most.</p>
            <p>Charcoal. Why? Fast, forgiving. variable line width, not exact</p>
            <p>Oil Pastels why? color, layering, like charcoal in a sense. not exact</p>
            <p>Adobe Illustrator. create realistic vector peices utilizing gradient mesh. Love the intrecte detail of creating the mesh. </p>
            <div class="gallery">
            <?php
                $dirName = "images/gallery/";
                $images = glob($dirName."*{jpg, png, gif, jpeg}", GLOB_BRACE);
                $numItems = count($images);
                $i = 0;

                foreach($images as $image){
                    if($i == 0){
            ?>
        				<ul class="thumbnail-gallery gallery">
            <?php
                    }
                    list($width, $height) = getimagesize($image);
                    $ratio = $width / $height;
            ?>
                    <li class="gallery-item <?php
                            if ($ratio > "1.9") {
                                echo 'wide';
                            }
                            elseif ($ratio < ".75") {
                                echo 'tall';
                            }
                        ?>">
                        <a href="<?php echo $image;?>" rel="gallery_image" >
        				<img class="gallery-thumbs" src="<?php echo $image; ?>">
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
            <h2>How to create a CSS Grid Image Gallery</h2>
            <p>I wanted to see if I could create a simple matience free image gallery using CSS Grid Layout. Below details the steps I took to acheive the result.</p>
            <p>For more details be sure to visit my article on <a href="/articles/css-grid-layout">CSS Grid Layout</a>.</p>
            <ol>
                <li>
                    <p>Create an unordered list.</p>
                    <code>
                        .thumbnail-gallery { <br>
                            display: grid; <br>
                            grid-gap: 2em; <br>
                            grid-template-columns: repeat(auto-fit,minmax(8.75em,1fr)); <br>
                            grid-auto-rows: 150px; <br>
                            grid-auto-flow: row dense; <br>
                        }
                    </code>
                </li>
                <li><p>Use the PHP Glob function to get the images from the directory.</p></li>
                <li><p>Use PHP to get the lenght and widths of images. Do some math to find the ratio. If the ratio is greater than 2.5 add wide class. If the ratio is less than .5 then add the tall class.</p>
                    <p>
                        <code>
                            .thumbnail-gallery li.wide { <br>
                                grid-column: 1/3; <br>
                            }
                        </code>
                    </p>
                    <p>
                        <code>
                            .thumbnail-gallery li.tall {<br>
                              grid-row: 1/3;<br>
                              height: 21em; <br>
                          }
                        </code>
                    </p></li>
                <li><p>Use colorbox </p></li>
            </ol>
        </aside>
        <?php require_once(SITE_ROOT.'/includes/footer.php'); ?>
    </body>
</html>
