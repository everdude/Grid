<ul>
    <li class="level_1<?php if($uri_segments[1] == ""){?> active<?php }?>"><a href="/">Home</a></li>
    <li class="level_1<?php if(rtrim($uri_segments[1], ".php") == "web-development"){?> active<?php }?>"><a href="/web-development.php">Web Development</a></li>
    <li class="level_1<?php if(rtrim($uri_segments[1], ".php") == "graphic-design"){?> active<?php }?>"><a href="/graphic-design.php">Graphic Design</a></li>
    <li class="level_1<?php if(rtrim($uri_segments[1], ".php") == "fine-art-gallery"){?> active<?php }?>"><a href="/fine-art-gallery.php">Fine Art Gallery</a></li>
    <li class="level_1<?php if(rtrim($uri_segments[1], ".php") == "articles"){?> active<?php }?>"><a href="/articles/">Articles</a></li>
    <li class="level_1<?php if(rtrim($uri_segments[1], ".php") == "resume"){?> active<?php }?>"><a href="/resume.php">Resume</a></li>
    <li class="level_1<?php if(rtrim($uri_segments[1], ".php") == "contact"){?> active<?php }?>"><a href="/contact.php">Contact</a></li>
</ul>
