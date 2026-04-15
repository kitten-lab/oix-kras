<?php
openSky("VIEWING PUBLIC_USER REPORTS");
SKY__AUTH(
    $site,
    $sys,
    $site,
    "SKYLINE-REPORTER", // storage slug of #MOD
    "SKYLINE NEWS", // display name of MOD
    "PUBLIC", // building slug #DOM
    "PUBLIC OFFICE", // building display name
    "NEWS", // room slug #ROOM
    "THE NEWS ROOM",// room display name
    "skyline-standard",
);

bigHeading($GLOBALS['roomkey']);

getTool("postBASIC","NewList");
leaf("<br><br><br><a href='NEWS-REPORT'>Post</a>");
closeSky();
?>