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
            <p class="publishDate">Date published: April ??, 2018</p>
            <p>What if we could deliever appropriate sized images to devices based on their form factor?
            With <a href="https://responsiveimages.org/">responsive images</a> this is now possible. We are not talking about
        images that fit the screen, but rather delivering different images to different devices.</p>
            <figure>
                <picture>
                    <!-- desktop -->
                    <source srcset="/images/desktop_stepBro.jpg" media="(min-width:64.063em)" alt="step brothers meme">
                    <!-- can use differnet pixel densities too  srcset="big.jpg 1x, big-2x.jpg 2x, big-3x.jpg 3x" type="image/jpeg" -->
                    <!-- tablet -->
                    <source srcset="/images/tablet_stepBro.jpg" media="(min-width:40.063em)" alt="step brothers meme">
                    <!-- phone -->
                    <source srcset="/images/phone_stepBro.jpg" alt="step brothers meme">
                    <!-- non compliant browsers -->
                    <img src="/images/IE_stepBro.jpg" alt="step brothers meme">
                </picture>
                <p class="caption">If you are on a larger screen reduce the width of the window and see different impages load.</p>
            </figure>
            <p>something about delievering appropriate image sizes to devices with limited connections or something.
            bandwidth, speed, performance, importance of those. explain how min and max-width works and the order of the images.
        also the fallback for non compliant browsers and how they just ignore the code it doesn't understand so it's
    perfectly safe to implement.</p>
            <code>
                &lt;picture&gt; <br>
                <span class="indent">
                    &lt;!-- desktop --&gt;<br>
                    &lt;source srcset="/images/desktop_stepBro.jpg" media="(min-width:64.063em)" alt="step brothers meme"&gt;<br>
                    &lt;!-- tablet --&gt;<br>
                    &lt;source srcset="/images/tablet_stepBro.jpg" media="(min-width:40.063em)" alt="step brothers meme"&gt;<br>
                    &lt;!-- phone --&gt;<br>
                    &lt;source srcset="/images/phone_stepBro.jpg" alt="step brothers meme"&gt;<br>
                    &lt;!-- non compliant browsers --&gt;<br>
                    &lt;img src="/images/IE_stepBro.jpg" alt="step brothers meme"&gt;<br>
                    </span>
                &lt;/picture&gt;
            </code>
            <h2>The Code Explained</h2>
            <p></p>
            <h3></h3>
            <h3>Media Queries</h3>
            <h3>Non-Compliant Browsers</h3>
            <p>This method incorporates a built in fallback for non-compliant browsers. Browsers that don't recoginzed the
            picture or source tags will simply ignore them, and move on to the img tag. So this method is completely
        backwards compatible.</p>
        <p>Likewise, modern browsers will use the first tag that it comes across inside of the picure element. This is why we set the img tag last.
            That way it won't get read by the browser unless it doesn't support the other tags.
    </p>
            <h3>Min-Width vs. Max-Width</h3>
            <p>better to use min-width because it's future compliant or forward looking.
                we don't know what screen sizes the internet of things will hold in the future, with max-width you set
                    limits on things, and you potentially miss the cutt-off of future screen sizes.</p>
                    <p>Min-width on the other hand
                    doesn't limit you, but rather sets minmunms. This means that no matter what screen sizes come out on future
                    devices you will be covered.
                 </p>
        </article>
        <aside id="sideBar">

        </aside>
        <?php require_once(SITE_ROOT.'/includes/footer.php'); ?>
    </body>
</html>
