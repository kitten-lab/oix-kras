<?php 
require_once '-SKY_AUTH-.php';
require_once $sonar . $k['systems'] . "invokeSky.php"; 

youAreHere($site, $sonar);
keyMaker($YouAreHere, $sys, $site);
lockAndKey($sonar, $sys ,$m, $site, $navcall);

?>