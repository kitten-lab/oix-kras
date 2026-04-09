<?php /* 
==================== C O N F I G . f i l e  ==================== 
================================================================
>| Do not forget me. */ $loversMark = "I-ALWAYS-LOVE-YOU"; 

$GLOBALS['SITE_SLUG'] = "HOME"; 

$GLOBALS[$site]['room'] = [
                    ["name" => "WELCOME-HOME"],
                    ["name" => "THE_ROOM"],
                    ];
$GLOBALS[$site]['key'] = "HOME"; 

    
    include __DIR__ . "/-FIG--nav.php";
    include __DIR__ . "/-FIG--plogBasic.php"; 
    include __DIR__ . "/-FIG--mailroomBasic.php"; 
    include __DIR__ . "/-FIG--routeErrors.php"; 
    
    function getMy_Styles(){
        getA_Style("style",$GLOBALS['sys'],"asSys");
        getA_Style("sky",$GLOBALS['sys'],"asSys");
        getA_Style("fonts",$GLOBALS['sys'],"asSys");
        getA_Style("style",$GLOBALS['dom'],"asDom");
    }

    function getMy_WWW($www){
        $GLOBALS['HOME']['bar'] = $www;
    }
?>