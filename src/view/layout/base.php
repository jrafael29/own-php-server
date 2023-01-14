<?php 
require_once(__DIR__ . '\baseheader.php');

$renderView = function($filename){
    
    require_once(dirname(__DIR__) . "\\".$filename);

    require_once(__DIR__ . '\basefooter.php');
}
?>