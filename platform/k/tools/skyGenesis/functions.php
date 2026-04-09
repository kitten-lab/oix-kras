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



<?php
function CREATE_ERROR_FIG(){
$template = <<<'FETCH_ERROR_FIG'

<?php
function noKeyFound(){
    skylite(openSky("Key Failure"));
    skylite(bigHeading("That isn't a key for this."));
    skylite(leaf("PERHAPS YOU MEANT TO BE HERE. DID YOU WISH TO VISIT THE PUBLIC_OFFICE?"));
}

function notARoom(){
    skylite(openSky("Unauthorized or None Existant Room"));
    skylite(bigHeading("That is not a registered location."));
    skylite(leaf("PERHAPS YOU MEANT TO BE HERE. DID YOU WISH TO VISIT THE PUBLIC_OFFICE?"));
}

function aRoomWithNoKey(){
    skylite(openSky("Room without a Key"));
    skylite(medHeading("There is a room but no key."));
    skylite(leaf("PERHAPS YOU MEANT TO BE HERE. DID YOU WISH TO VISIT THE PUBLIC_OFFICE?"));
}


?>
FETCH_ERROR_FIG;

return $template;
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




<?php // MAKE THE INDEX
function CREATE_WELCOME_HOME($WORLD_NAME, $ROOM){
$template = <<<'FETCH_WELCOME_HOME'
<?php 
openSky("Welcome Home!");
bigHeading("Welcome {{WORLD_NAME}}, to the site of your new home! Your new room is waiting! You called it {{ROOM}}, remember?");
closeSky();
?>
FETCH_WELCOME_HOME;

$result = str_replace(
    ['{{WORLD_NAME}}', '{{ROOM}}'],
    [$WORLD_NAME, $ROOM],
    $template);
return $result;
}
?>


<?php
function CREATE_BASE_SHELL() {
$template = <<<'FETCH_BASE_SHELL'

<?php foreach ($GLOBALS['GETS']['actor'] as $fn) {
    echo $fn();
} ?>
<!-- .... DEAR INFINITE POTENTIAL, HOLY DOCTYPE... -->
<!DOCTYPE html>
<html><head>

<?php 
foreach ($GLOBALS['GETS']['dressing'] as $fn) {
    echo $fn();
} ?>
<?php getMy_Styles(); ?>
<title><?= $GLOBALS['pageTitle'] ?></title>

</head>
<!-- END OPENING PRAYERS -->
<body>

<?php include 'header.php'; ?>

<main>

<?php foreach ($GLOBALS['GETS']['set'] as $fn) {
    echo $fn();
} ?>
</main>

<?php include 'footer.php'; ?>

</body>
</html>
<!-- AMEN -->
FETCH_BASE_SHELL;

return $template;
}
?>

<?php
function CREATE_BASE_HEADER($WORLD_NAME){
$template = <<<'FETCH_BASE_HEADER'

<header>
<h1>{{WORLD_NAME}}</h1>
</header>
FETCH_BASE_HEADER;

return str_replace('{{WORLD_NAME}}', $WORLD_NAME, $template);
}
?>


<?php
function CREATE_BASE_FOOTER(){
$template = <<<'FETCH_BASE_FOOTER'
    <footer>
    HOSTED BY IMPORTED.TO! CURRENT MOD: <?= $GLOBALS['mod']; ?>. <?= date('\RY \E\Dm:\E\Tw:\E\Nd \Dg:\Ti:\Ns') . bin2hex(random_bytes(3)); ?>
    </footer>
FETCH_BASE_FOOTER;

return $template;
}
?>



<?php
function CREATE_BASIC_STYLE(){
$template = <<<'FETCH_BASIC_STYLE'

@import url('https://fonts.googleapis.com/css2?family=Coral+Pixels&display=swap');
/* "Coral Pixels" */
@import url('https://fonts.googleapis.com/css2?family=Coral+Pixels&family=Jersey+10+Charted&display=swap'); 
/* "Jersey 10 Charted" */
@import url('https://fonts.googleapis.com/css2?family=VT323&display=swap');
/* "VT323" */
@import url('https://fonts.googleapis.com/css2?family=Sixtyfour&display=swap');
/* "Sixtyfour" */
@import url('https://fonts.googleapis.com/css2?family=Press+Start+2P&display=swap');

:root { 
    --backgroundColor: #ffffff;
    --accentColor-dark: rgb(48, 62, 52);
    --accentColor-light: rgb(191, 208, 184);
}

body {
    background: var(--backgroundColor);
    margin: 0;
    color: var(--accentColor-dark);
    /* font-family:'Zen Dots', -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;*/
}

main {
    margin: 0.5rem;
    background-color: var(--accentColor-light);
    padding: 1rem;
    box-shadow: inset 0 0 2rem #fff;
    border-radius: .5rem;
}

header {
    position: relative;
    top: 0;
    left: 0;
    right: 0;
    padding: 1rem;
    height: 5.5rem;
    width: 100%;
    box-shadow: 0 .1rem 0rem var(--accentColor-light);
}

header h1 {
    display: inline-block;
    position: absolute;
    margin: 2rem 2rem;
    font-weight: 300;
    letter-spacing: .5rem;
    font-size: .6rem;
    border-bottom: .05rem solid black;
}

footer {
    font-size: .5rem;
    padding: .7rem;
    position: relative;
    bottom: 0;
    left: 0;
    right: 0;
    height: 5.5rem;
    text-transform: uppercase;
    width: 100%;
    box-shadow: 0 -.1rem 0rem var(--accentColor-light);
}
FETCH_BASIC_STYLE;

return $template;
}
?>