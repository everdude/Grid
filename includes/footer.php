<nav id="nav">
    <p class="close"><a href="#return">
        <svg class="close-icon">
            <use xlink:href="#close-icon"></use>
        </svg> Close
    </a></p>
    <ul>
        <li class="level_1<?php if($uri_segments[1] == ""){?> active<?php }?>"><a href="/">Home</a></li>
        <li class="level_1<?php if($uri_segments[1] == "web-development"){?> active<?php }?>"><a href="/web-development">Web Development</a></li>
        <li class="level_1<?php if($uri_segments[1] == "articles"){?> active<?php }?>"><a href="/articles">Articles</a></li>
        <li class="level_1<?php if($uri_segments[1] == "image-gallery"){?> active<?php }?>"><a href="/image-gallery">Image Gallery</a></li>
        <li class="level_1<?php if($uri_segments[1] == "contact"){?> active<?php }?>"><a href="/contact">Contact</a></li>
    </ul>
    <p class="close"><a href="#return">
        <svg class="close-icon">
            <use xlink:href="#close-icon"></use>
        </svg> Close
    </a></p>
</nav>
<div id="dark-cover" aria-label="Mobile Only - on click, close mobile menu"></div>
<footer>
    <ul class="footer-links">
        <li><a href="/sitemap">Sitemap</a></li>
        <li><a href="/contact">Contact</a></li>
    </ul>
    <p class="copywrite">&copy; <?php echo date("Y"); ?> <a href="/">Brad Everett</a>. All Rights Reserved.</p>
</footer>
<p id="back-top"><a href="#top" title="back to top">
    <svg class="back-top"><use xlink:href="#upArrow"></use></svg><br>back to top</a>
</p>
</div><!-- end wrapper -->
<?php require_once(SITE_ROOT.'/includes/svg.html'); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- <script  src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script> -->
<script defer src="/js/scripts.min.js"></script>
<?php
if ($gallery == true) {
?>
    <script defer src="/js/colorbox.js"></script>
    <script defer type="text/javascript">
    //<!-- hide javascript from validator
    $(document).ready(function(){
        $('a[rel=gallery_image]').colorbox({
            onOpen: function(){$('iframe').css('visibility','hidden');},
            onClosed: function(){$('iframe').css('visibility','visible');},
            maxWidth:'95%',
            maxHeight:'95%',
            scalePhotos:'true'
        });

        //<!-- Colorbox resize function -->
        var resizeTimer;
        function resizeColorBox(){
            if (resizeTimer) clearTimeout(resizeTimer);
            resizeTimer = setTimeout(function() {
                if ($('#cboxOverlay').is(':visible')) {$.colorbox.load(true);}
            }, 300)
        }

        //<!--  Resize Colorbox when resizing window or changing mobile device orientation -->
        $(window).resize(resizeColorBox);
        window.addEventListener("orientationchange", resizeColorBox, false);
    });
    // end hiding from validator -->
    </script>
<?php
}
?>
