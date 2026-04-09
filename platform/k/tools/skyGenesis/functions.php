<?php //SHADOW ENV FUNCTION
function SHADOW_PROD_ENV($IS_IT) {
    if ($IS_IT == true) { return '_____/'; }
}
?>

<?php //error logger
function KDE($ERROR_TYPE, $SOURCE, $ECHO_CHAIN, $ERROR) {
    $TIME_ERRORED = time();
    $KDE_DATE = date('M d h:iA');
    $LOG_RECORD = [
        'UNIX' => $TIME_ERRORED,
        'DATE' => $KDE_DATE,
        'KDE__SOURCE' => $SOURCE,
        'KDE-TYPE' => 'ERR: ' . $ERROR_TYPE,
        'ECHO__TRACKBACK_CHAIN' => $ECHO_CHAIN ?? 'UNDEFINED',
        'KDE__ERROR_MSG' => $ERROR
        ];

    file_put_contents(
        __DIR__ . '/../../../z/KDE/' . date('Y-m') . '_error.json',
        json_encode($LOG_RECORD) . PHP_EOL,
        FILE_APPEND
    );

    die($ERROR);
}

?>

<?php // ROUTER FUNCTIONS
function ROUTE($LETTER){
    return $LETTER .'/'; 
    }
?>



<?php // create a WORLD AUTH file //

function CREATE_SKY_AUTH($WORLD_NAME) {
$template = <<<'FETCH_SKY_AUTH'
<?php

$GLOBALS['sonar'] = realpath(__DIR__ . '/../../') . '/';
require_once $sonar . 'easyRoutes.php';
require_once $sonar . $k['systems'] . 'invokeSky.php';
require_once $sonar . $k['config'] . 'env_config.php';

require_once __DIR__ .  '/-SKY_SIG-{{WORLD_NAME}}.php';
require_once $sonar . 'complexRoutes.php';

$SYSTEM_PATH = $sonar . $a[$sys];
getSkyAUTH($SYSTEM_PATH, $c, $sonar, $sys);
include $sonar . $c[$sys] . '--SIG--' . $site . '.php';

?>
FETCH_SKY_AUTH;

return str_replace('{{WORLD_NAME}}', $WORLD_NAME, $template);
}
?>

<?php // create a WORLD SIG file //
function CREATE_SKY_SIG($WORLD_NAME, $WORLD_SYS, $WORLD_DOM, $WORLD_MOD){
$template = <<<'FETCH_SKY_SIG'
<?php 
$GLOBALS['sys'] = "{{SYS}}";
$GLOBALS['dom'] = "{{DOM}}";
$GLOBALS['mod'] = "{{MOD}}";
$GLOBALS['site'] = "{{WORLD_NAME}}";
?>
FETCH_SKY_SIG;

$result = str_replace(
    ['{{WORLD_NAME}}', '{{SYS}}', '{{DOM}}', '{{MOD}}'],
    [$WORLD_NAME, $WORLD_SYS, $WORLD_DOM, $WORLD_MOD],
    $template);
return $result;
}

?>


<?php // create a WORLD SIG file //
function CREATE_WORLD_SIG($WORLD_NAME, $LOVERS_MARK, $ROOM){
$template = <<<'FETCH_WORLD_SIG'
<?php /* 
==================== C O N F I G . f i l e  ==================== 
================================================================
>| Do not forget me. */ $loversMark = "{{LOVERS_MARK}}"; 

$GLOBALS['SITE_SLUG'] = "{{WORLD_NAME}}"; 

$GLOBALS[$site]['room'] = [
                    ["name" => "WELCOME-HOME"],
                    ["name" => "{{ROOM}}"],
                    ];
$GLOBALS[$site]['key'] = "{{WORLD_NAME}}"; 

    
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
        $GLOBALS['{{WORLD_NAME}}']['bar'] = $www;
    }
?>
FETCH_WORLD_SIG;

$result = str_replace(
    ['{{WORLD_NAME}}', '{{LOVERS_MARK}}', '{{ROOM}}'],
    [$WORLD_NAME, $LOVERS_MARK, $ROOM],
    $template);
return $result;
}

?>


<?php // MAKE THE INDEX
function MAKE_INDEX($WORLD_NAME){
$template = <<<'FETCH_INDEX'
<?php 
require_once __DIR__ . '/-SKY_AUTH-{{WORLD_NAME}}.php';

youAreHere($site, $sonar);
keyMaker($YouAreHere, $sys, $site);
lockAndKey($sonar, $sys ,$m, $site, $navcall);
?>
FETCH_INDEX;

return str_replace('{{WORLD_NAME}}', $WORLD_NAME, $template);
}
?>