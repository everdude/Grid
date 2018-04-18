<?php
require_once("config.php");

// vars from form
$email = "bever01@gmail.com";
$from = $_POST["name"];
$femail = $_POST["email"];
$message = $_POST["message"];

// captcha check
$responceKey = "6LfItkoUAAAAALtrs73i5Br8mTQzZhABkzsRnDZZ";
$captchaResponse = $_POST["g-recaptcha-response"];
$url = "https://www.google.com/recaptcha/api/siteverify?secret=".$responceKey."&response=".$captchaResponse."&remoteip=".$_SERVER['REMOTE_ADDR'];
$result = file_get_contents($url);
$data = json_decode($result);
/*
if($result['success'] == true){
    $captcha = "Pass";
    mail ($email, strtoupper($from), $message, $femail, "From: $email");
}
else{
    $captcha = "Fail";
}
*/
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once(SITE_ROOT.'/includes/metadata.php'); ?>
        <title>Contact - <?php echo $siteTitle; ?></title>
        <meta name="keywords" content="">
        <meta name ="descrption" content="">
    </head>
    <?php require_once(SITE_ROOT.'/includes/header.php'); ?>
        <article id="content">
            <h1>Contact</h1>
            <p>cap: <?php echo $captchaResponse; ?></p>
            <p>url: <?php echo $url; ?></p>
            <p> result: <?php //var_dump($result->results[0]->success);
echo $data->success; ?></p>

            <!-- <?php if($captcha == "true"){ ?>
                <h2>Email Sent</h2>
                <p><?php echo ucwords($from);?> your email has been sent.</p>
                <p><?php echo date ("H:i, F jS"); ?></p>
                <p>Thank you.</p>

            <?php }
            else {
            ?>
                <h2>Error</h2>
                <p>Please <a href='contact.php'>go back</a> and fill out the captcha.</p>
            <?php } ?> -->
        </article>
        <aside id="sideBar">

        </aside>
        <?php require_once(SITE_ROOT.'/includes/footer.php'); ?>
    </body>
</html>
