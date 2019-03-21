<?php require_once("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php require_once(SITE_ROOT.'/includes/metadata.php'); ?>
        <title><?php echo $siteTitle;?></title>
        <meta name="keywords" content="brad everett, brad, everett, bradeverett.com, design, graphic, artist, digital media, digital design, freelance, mid michigan, lansing, mi, lansing mi, front end web developer, mid michigan freelance designer, mid-michigan, lansing area graphic designer, lansing area, michigan, contract design, logo design, logo, website design, web design, CSS, Cascading Style Sheets, HTML, XHTML">
        <meta name ="descrption" content="This is a site dedicated to the graphic design, website design, and multimedia design of Brad Everett. Based out of Lansing, Michigan Brad services the greater mid-michigan area in graphic design, logo design, website design, and preparing files for print">
    </head>
    <?php require_once(SITE_ROOT.'/includes/header.php'); ?>
        <article id="content">
            <h2>Welcome</h2>
            <p>Welcome to BradEvertt.com, where Brad prides himself on delivering quality media to his clients, whether in print, or digital form. Having an expertise in a wide range of media, from website design, graphic design, to 3d animation. Brad can promote your business utilizing a wide variety of formats in a timely and professional matter.</p>
            <p>Serving the Lansing and greater Mid Michigan area, Brad believes in bringing an intelligent approach to design, that incorporates consistency, trendy, accurate pieces that are tailored to each individual client.</p>
        </article>
        <aside id="sideBar">
            <section>
                <h3><a href="/web-development.php">Web Development</a></h3>
                <p>Are you looking to start a website or need some updates on an existing one? Brad is the answer. Webpages will be created to be viewed in major browsers. All sites are custom and will be designed according to your needs.</p>
            </section>
            <section>
                <h3><a href="/fine-art-gallery.php">Fine Art Gallery</a></h3>
                <p>As an artist, Brad loves to just sit down and draw with his media of choice, charcoal. Brad specializes in portraiture and figure drawing. This is more of a hobby of his, but he does offer it as a service. Below you will find some samples of Brad's work.</p>
                <p><a href="/fine-art-gallery.php">View his art work</a></p>
            </section>
        </aside>
        <?php require_once(SITE_ROOT.'/includes/footer.php'); ?>
    </body>
</html>
