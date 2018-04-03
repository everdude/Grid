<?php
// define site root for includes
define('SITE_ROOT', __DIR__);

// get url segments
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);

//set homepage var
if(empty($uri_segments[1])){
    $home = "1";
}

// set site title
$pageTitle = "Brad Everett";
?>
