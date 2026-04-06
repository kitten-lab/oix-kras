<?php 
require_once '_configs/clrRoutes.php';
openSky("This is the Title of Your Page!");

bigHeading("Welcome to SKYLINE On INTERA.");

leaf("Thank you for entering our sight. We see you. 
$BR We feel you. We know you.");

medHeading("Consider submitting a vision report.
We see what you see. Let us know.");

getTool('plog.basic', 'Add');

section($left,"width: 50%;","");

medHeading("Review Recent Postings");
getTool('plog.basic', 'List');

close_section();

closeSky();
require resolveShell($sys);
?>