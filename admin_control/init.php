<?php

include 'connectdb.php';
//Routes

$tpl = 'includes/templates/'; //template short route
$css = 'layout/css/'; //css short route
$js  = 'layout/js/'; //js short route
$lang= 'includes/langs/'; // languages files
$fun = 'includes/function/';  // ready functions

include $fun  . 'functions.php';
include $lang . 'en.php';
include $tpl  . 'header.php';


if(!isset($noNavBar)){
include $tpl. 'navbar.php';
}


