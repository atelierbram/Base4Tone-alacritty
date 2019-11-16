<?php
error_reporting(E_ALL);
ini_set('display_errors', true);
ini_set('html_errors', false);

include_once "../db/schemes/vars-hex-b4t_classic-b.php";
$url_file = "https://github.com/atelierbram/Base4Tone-alacritty/blob/master/config/Base4Tone-Classic-B-Dark.yml";

echo "# colorscheme: $scheme by $author\n";
echo "# project: $url_project\n";
echo "# $url_file\n";
echo "\n";

include_once "../db/templates/alacritty/dark.php";
