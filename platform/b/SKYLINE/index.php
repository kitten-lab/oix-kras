<?php 
// IMPORT-TERMINAL BASE ꓘra *|*>>> "Alice through the looking glass" //
require_once '_configs/clrRoutes.php';
require_once '_configs/asSelf_config.php';

$pageTitle = "THE SKYLINE ON-INTERA";
$pageLogic = getTool('log.basic', 'actorAdd');
$pageSlug = getTool('log.basic', 'pageAdd');

require resolveShell($sys);
?>