<body<?php if($home == "1"){?> class="home"<?php }?>>
<p class="hide"><a href="#content">skip to main content</a></p>
<div class="banner <?php if($home == "1"){?> home <?php }?>">
    <div class="wrapper">
        <header>
            <?php
            if($home == "1"){
            ?>
                <h1 class="siteTitle"><a href="/"><?php echo $siteTitle; ?></a></h1>
            <?php
            }
            else{
            ?>
                <p class="siteTitle"><a href="/"><?php echo $siteTitle; ?></a></p>
            <?php
            }
            ?>
            <p id="nav-button" class="nav-button">
                <a id="mobile-nav-anchor" href="#nav">
                <svg class="mobile-menu">
                    <text>Mobile Menu</text>
                    <use xlink:href="#menu-search-icon"></use>
                </svg>
                </a>
            </p>
        </header>
    </div>
</div>
<div class="wrapper">
