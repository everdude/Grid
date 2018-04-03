<?php require_once('../config.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <?php require_once(SITE_ROOT."/includes/metadata.php"); ?>
        <title>Articles - <?php echo $pageTitle; ?></title>
        <meta name="keywords" content="">
        <meta name ="descrption" content="">
    </head>
    <?php require_once(SITE_ROOT."/includes/header.php"); ?>
        <article id="content">
            <h1>Articles</h1>
            <ul class="article-list">
                <li class="article">
                    <h2><a href="/articles/responsive-images">Responsive Images</a></h2>
                    <p></p>
                </li>
                <li class="article">
                    <h2><a href="/articles/css-grid-layout">CSS Grid Layout</a></h2>
                    <p></p>
                </li>
                <li class="article">
                    <h2><a href="/articles/schema-markup">Schema Markup</a></h2>
                    <p></p>
                </li>
                <li class="article">
                    <h2><a href="/articles/pure-css-dropdown-menu">Pure CSS Dropdown Menu</a></h2>
                    <p></p>
                </li>
            </ul>
        </article>
        <aside id="sideBar">

        </aside>
        <?php require_once(SITE_ROOT."/includes/footer.php"); ?>
    </body>
</html>
