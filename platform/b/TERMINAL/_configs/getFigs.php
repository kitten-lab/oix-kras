<?php
    include 'config_nav.php';
    require_once $sonar . $kinit . "callImages.php";
    require_once $sonar . $kinit . "callSky.php"; 
    require_once "figs/fig-plogBasic.php"; 
    require_once "figs/fig-mailroomBasic.php"; 
    
    function getMy_Styles(){
        getA_Style("style",$GLOBALS['sys'],"asSys");
        getA_Style("sky",$GLOBALS['sys'],"asSys");
        getA_Style("fonts",$GLOBALS['sys'],"asSys");

    }
?>