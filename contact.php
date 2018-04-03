<?php
require_once("config.php");
$captcha = true;
?>
<!DOCTYPE html>
<html>
    <head>
        <?php require_once(SITE_ROOT.'/includes/metadata.php'); ?>
        <title>Contact - <?php echo $pageTitle; ?></title>
        <meta name="keywords" content="">
        <meta name ="descrption" content="">
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <?php require_once(SITE_ROOT.'/includes/header.php'); ?>
        <article id="content">
            <h1>Contact</h1>
            <form class="" action="processEmail.php" method="post">
                <p>
                    <label for="name">* Name:</label>
                    <input type="text" required name="name" value="">
                </p>
                <p>
                    <label for="email">* Email:</label>
                    <input type="email" required name="email" value="">
                </p>
                <p class="">
                    <label for="message">* Message:</label>
                    <textarea name="message" required rows="8"></textarea>
                </p>
                <div class="g-recaptcha" data-sitekey="6LfItkoUAAAAAIw2v30MBnr7Z-SdXtQZJsz-EXjx"></div>
                <p><input type="submit" value="Submit"></p>

            </form>
        </article>
        <aside id="sideBar">

        </aside>
        <?php require_once(SITE_ROOT.'/includes/footer.php'); ?>
    </body>
</html>
