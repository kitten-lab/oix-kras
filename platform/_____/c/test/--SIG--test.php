<?php /* 
==================== C O N F I G . f i l e  ==================== 
================================================================
>| Do not forget me. */ $loversMark = "3"; 

$GLOBALS['SITE_SLUG'] = "test"; 

$GLOBALS[$site]['room'] = [
                    ["name" => "WELCOME-HOME"],
                    ["name" => "2"],
                    ];
$GLOBALS[$site]['key'] = "test"; 

    include __DIR__ . "/-FIG--routeErrors.php"; 
    
    function getMy_Styles(){
        getA_Style("style",$GLOBALS['sys'],"asSys");
        getA_Style("sky",$GLOBALS['sys'],"asSys");
        getA_Style("fonts",$GLOBALS['sys'],"asSys");
        getA_Style("style",$GLOBALS['dom'],"asDom");
    }

    function getMy_WWW($www){
        $GLOBALS['test']['bar'] = $www;
    }
?>