<?php require_once("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once(SITE_ROOT.'/includes/metadata.php'); ?>
        <title><?php echo $siteTitle;?></title>
        <meta name="keywords" content="">
        <meta name ="descrption" content="">
    </head>
    <?php require_once(SITE_ROOT.'/includes/header.php'); ?>
        <article id="content">
            <h2>Body content goes here</h2>
        </article>
        <aside id="sideBar">
            <h2>Sidbar conent goes here</h2>
        </aside>
        <?php require_once(SITE_ROOT.'/includes/footer.php'); ?>
    </body>
</html>
