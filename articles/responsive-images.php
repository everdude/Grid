<?php require_once("../config.php");?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once(SITE_ROOT.'/includes/metadata.php'); ?>
        <title>Responsive Images - <?php echo $siteTitle; ?></title>
        <meta name="keywords" content="">
        <meta name ="descrption" content="">
    </head>
    <?php require_once(SITE_ROOT.'/includes/header.php'); ?>
        <article id="content">
            <h1>Responsive Images</h1>
            <p>Here is an example of responsive images. resize the browser to see different images load at different screen sizes. I'll be documenting this more as I finish up my site.</p>
            <picture>
                <!-- desktop -->
                <source srcset="/images/desktop_stepBro.jpg" media="(min-width:64.063em)" alt="step brothers meme">
                <!-- tablet -->
                <source srcset="/images/tablet_stepBro.jpg" media="(min-width:40.063em)" alt="step brothers meme">
                <!-- phone -->
                <source srcset="/images/phone_stepBro.jpg" alt="step brothers meme">
                <!-- non compliant browsers -->
                <img src="/images/IE_stepBro.jpg" alt="step brothers meme">
            </picture>
<?php /*
            <code>
                <picture>
                    <!-- desktop -->
                    <source srcset="/images/desktop_stepBro.jpg" media="(min-width:64.063em)" alt="step brothers meme">
                    <!-- tablet -->
                    <source srcset="/images/tablet_stepBro.jpg" media="(min-width:40.063em)" alt="step brothers meme">
                    <!-- phone -->
                    <source srcset="/images/phone_stepBro.jpg" alt="step brothers meme">
                    <!-- non compliant browsers -->
                    <img src="/images/IE_stepBro.jpg" alt="step brothers meme">
                </picture>
            </code>
            */ ?>
        </article>
        <aside id="sideBar">

        </aside>
        <?php require_once(SITE_ROOT.'/includes/footer.php'); ?>
    </body>
</html>
