<body<?php if($home == true){?> class="home"<?php }?>>
<p class="hide"><a href="#content">skip to main content</a> <a href="#nav">skip to navigation</a></p>
<div class="banner <?php if($home == true){?> home <?php }?>">
    <div class="wrapper">
        <header>
            <?php
            if($home == true){
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
                <button id="mobile-nav-anchor">
                    <svg class="mobile-menu">
                    <text>Mobile Menu</text>
                    <use xlink:href="#menu-search-icon"></use>
                </svg>
            </button>
            </p>
        </header>
    </div>
</div>
<div class="wrapper">
