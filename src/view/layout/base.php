<?php 
require_once(__DIR__ . '\baseheader.php');

$renderView = function($filename){
    echo '<div class="container">';
    require_once(dirname(__DIR__) . "\\".$filename);
    echo "</div>";
    require_once(__DIR__ . '\basefooter.php');
}
?>