<?php require_once('../config.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once(SITE_ROOT."/includes/metadata.php"); ?>
        <title>Articles - <?php echo $siteTitle; ?></title>
        <meta name="keywords" content="">
        <meta name ="descrption" content="">
    </head>
    <?php require_once(SITE_ROOT."/includes/header.php"); ?>
        <article id="content">
            <h1>Articles</h1>
            <ul class="article-list">
                <li class="article">
                    <h2><a href="/articles/responsive-images.php">Responsive Images</a></h2>
                    <p class="publishDate">Date Published: </p>
                </li>
                <li class="article">
                    <h2><a href="/articles/css-grid-layout.php">CSS Grid Layout</a></h2>
                    <p class="publishDate">Date Published: </p>
                </li>
                <li class="article">
                    <h2><a href="/articles/schema-markup.php">Schema Markup</a></h2>
                    <p class="publishDate">Date Published: </p>
                </li>
                <li class="article">
                    <h2><a href="/articles/pure-css-dropdown-menu.php">Pure CSS Dropdown Menu</a></h2>
                    <p class="publishDate">Date Published: May 21, 2009</p>
                </li>
            </ul>
        </article>
        <aside id="sideBar">

        </aside>
        <?php require_once(SITE_ROOT."/includes/footer.php"); ?>
    </body>
</html>
