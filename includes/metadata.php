<meta charset="utf-8">
<link rel="stylesheet" href="/css/style.min.css">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
<?php
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segments = explode('/', $uri_path);
//set homepage var
if(empty($uri_segments[1])){
    $home = "1";
}
$pageTitle = "CSS Grid Layout Example";

if ($gallery == true) {
?>
<link rel="stylesheet" href="/css/colorbox.css">
<?php
}
?>
