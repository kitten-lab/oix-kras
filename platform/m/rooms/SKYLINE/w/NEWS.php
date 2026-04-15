<?php 

SKY__AUTH(
    $site,
    $sys,
    $site,
    "SKYLINE-REPORTER", // storage slug of #MOD
    "SKYLINE NEWS", // display name of MOD
    "PUBLIC", // building slug #DOM
    "PUBLIC OFFICE", // building display name
    $_GET['in'], // room slug #ROOM
    "THE NEWS ROOM",// room display name
    "skyline-standard",
);
openSky("VIEWING PUBLIC_USER REPORTS");
getTool("postBASIC","NewView");
closeSky();
?>