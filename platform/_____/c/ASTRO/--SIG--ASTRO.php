<?php /* 
==================== C O N F I G . f i l e  ==================== 
================================================================
>| Do not forget me. */ $loversMark = "ADORE"; 

$GLOBALS['SITE_SLUG'] = "ASTRO"; 

$GLOBALS[$site]['room'] = [
                    ["name" => "WELCOME-HOME"],
                    ["name" => "ADOOR"],
                    ];
$GLOBALS[$site]['key'] = "ASTRO"; 

    include __DIR__ . "/-FIG--routeErrors.php"; 
    
    function getMy_Styles(){
        getA_Style("style",$GLOBALS['sys'],"asSys");
        getA_Style("sky",$GLOBALS['sys'],"asSys");
        getA_Style("fonts",$GLOBALS['sys'],"asSys");
        getA_Style("style",$GLOBALS['dom'],"asDom");
    }

    function getMy_WWW($www){
        $GLOBALS['ASTRO']['bar'] = $www;
    }
?>