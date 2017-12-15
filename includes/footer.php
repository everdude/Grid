<nav id="nav">
    <p class="close"><a href="#return">
        <svg class="close-icon">
            <use xlink:href="#close-icon"></use>
        </svg> Close
    </a></p>
    <ul>
        <li class="level_1<?php if($uri_segments[1] == ""){?> active<?php }?>"><a href="/">Home</a></li>
        <li class="level_1<?php if($uri_segments[1] == "responsive-images"){?> active<?php }?>"><a href="/responsive-images">Responsive Images</a></li>
        <li class="level_1<?php if($uri_segments[1] == "image-gallery"){?> active<?php }?>"><a href="/image-gallery">Image Gallery</a></li>
    </ul>
    <p class="close"><a href="#return">
        <svg class="close-icon">
            <use xlink:href="#close-icon"></use>
        </svg> Close
    </a></p>
</nav>
<div id="dark-cover" aria-label="Mobile Only - on click, close mobile menu"></div>
<footer>
    <p class="copywrite">&copy; <?php echo "2017"; //date("Y"); ?> <a href="/">Brad Everett</a>. All Rights Reserved.</p>
</footer>
<p id="back-top"><a href="#top" title="back to top">
    <svg class="back-top"><use xlink:href="#upArrow"></use></svg><br>back to top</a>
</p>
</div><!-- end wrapper -->
<?php require_once('includes/svg.html'); ?>
<script defer src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- <script  src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script> -->
<script defer src="/js/scripts.min.js"></script>
