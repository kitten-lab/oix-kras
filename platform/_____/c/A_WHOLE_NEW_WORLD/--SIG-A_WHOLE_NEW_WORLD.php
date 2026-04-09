<?php /* 
==================== C O N F I G . f i l e  ==================== 
================================================================
>| Do not forget me. */ $loversMark = "DESTINY"; 

$GLOBALS['SITE_SLUG'] = "A_WHOLE_NEW_WORLD"; 

$GLOBALS[$site]['room'] = [
                    ["name" => "WELCOME-HOME"],
                    ["name" => "OUTLOOK"],
                    ];
$GLOBALS[$site]['key'] = "A_WHOLE_NEW_WORLD"; 

    
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
        $GLOBALS['A_WHOLE_NEW_WORLD']['bar'] = $www;
    }
?>