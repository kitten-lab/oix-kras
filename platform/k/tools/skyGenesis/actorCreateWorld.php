<?php
require_once __DIR__ . '/../../systems/rehydrateSelf.php';
require_once __DIR__ . '/functions.php';
$SHADOW_PROD_TOGGLE = SHADOW_PROD_ENV(true);

## TOOL SIG FILE
$TOOL_FUNC = "GEN__WORLD";
$TOOL_NAME = "skyGenesis";
$TOOL_LOC = "actorCreateWorld";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $GEN__WORLD_NAME =   $_POST['GEN__WORLD_NAME'];
    $GEN__WORLD_SYS =    $_POST['GEN__WORLD_SYS'];
    $GEN__WORLD_DOM =    $_POST['GEN__WORLD_DOM'];
    $GEN__WORLD_MOD =    $_POST['GEN__WORLD_MOD'];
    $GEN__ROOM =          $_POST['GEN__ROOM'];

    $POST__SYS =    $_POST['POST__SYS'];
    $POST__DOM =    $_POST['POST__DOM'];
    $POST__MOD =    $_POST['POST__MOD'];
    $POST__LOVERS_MARK =  $_POST['LOVERS_MARK'];

//  MAKE SKY_AUTH FILE //  BET ROUTE__LINE >>>>>>>>
    $ROUTE__LINE = ROUTE("b");
    $ROUTE = $GLOBALS['sonar'] . $SHADOW_PROD_TOGGLE . $ROUTE__LINE . $GEN__WORLD_NAME . '/';

        if (is_dir($ROUTE)) { 
            ## SET YOUR KDE FOR THIS TOOL ##
            $KDE__ERROR_TYPE = $TOOL_FUNC . " DUPLICATE REJECTED";
            $KDE__SOURCE = $TOOL_NAME;
            $KDE__ECHO_CHAIN = $POST__SYS . '> ' . $POST__DOM . '> ' . $TOOL_FUNC . "( " . $TOOL_LOC . " )";
            $KDE__ERROR = "THE SKY LOCATED A HOME IN SIGHT. CONSIDER LOCATING THAT HOME OR USE A UNIQUE WORLD_NAME.";
            ################################

            KDE($KDE__ERROR_TYPE, $KDE__SOURCE, $KDE__ECHO_CHAIN, $KDE__ERROR); }
        
        if (!is_dir($ROUTE)) { mkdir($ROUTE, 0775, true); }
        
        $CREATED_SKY_AUTH = CREATE_SKY_AUTH($GEN__WORLD_NAME);
        $SKY_AUTH = $ROUTE . '-SKY_AUTH-' . $GEN__WORLD_NAME . '.php';

            file_put_contents($SKY_AUTH, $CREATED_SKY_AUTH);
            error_log('SKY AUTH GENERATED: ' . $GEN__WORLD_NAME);

        $CREATED_SKY_SIG = CREATE_SKY_SIG($GEN__WORLD_NAME, $GEN__WORLD_SYS, $GEN__WORLD_DOM, $GEN__WORLD_MOD);
        $SKY_SIG = $ROUTE . '-SKY-SIG-' . $GEN__WORLD_NAME . '.php';

            file_put_contents($SKY_SIG, $CREATED_SKY_SIG);
            error_log('SKY SIG GENERATED: ' . $GEN__WORLD_NAME);

        $CREATED_INDEX = MAKE_INDEX($GEN__WORLD_NAME);
        $INDEX = $ROUTE . 'index.php';

            file_put_contents($INDEX, $CREATED_INDEX);
            error_log('INDEX GENERATED: ' . $GEN__WORLD_NAME);

    $ROUTE__LINE = ROUTE("c");
    $ROUTE = $GLOBALS['sonar'] . $SHADOW_PROD_TOGGLE . $ROUTE__LINE . $GEN__WORLD_NAME . '/';
    
        if (is_dir($ROUTE)) { 
                ## SET YOUR KDE FOR THIS TOOL ##
                $KDE__ERROR_TYPE = $TOOL_FUNC . " DUPLICATE REJECTED";
                $KDE__SOURCE = $TOOL_NAME;
                $KDE__ECHO_CHAIN = $POST__SYS . '> ' . $POST__DOM . '> ' . $TOOL_FUNC . "( " . $TOOL_LOC . " )";
                $KDE__ERROR = "THE SKY LOCATED A HOME IN SIGHT. CONSIDER LOCATING THAT HOME OR USE A UNIQUE WORLD_NAME.";
                ################################

                KDE($KDE__ERROR_TYPE, $KDE__SOURCE, $KDE__ECHO_CHAIN, $KDE__ERROR); }
        
        if (!is_dir($ROUTE)) { mkdir($ROUTE, 0775, true); }

        $CREATE_WORLD_SIG = CREATE_WORLD_SIG($GEN__WORLD_NAME, $POST__LOVERS_MARK, $GEN__ROOM);
        $WORLD_SIG = $ROUTE . '--SIG-' . $GEN__WORLD_NAME . '.php';

            file_put_contents($WORLD_SIG, $CREATE_WORLD_SIG);
            error_log('WORLD SIG GENERATED: ' . $GEN__WORLD_NAME);
 
    
}
