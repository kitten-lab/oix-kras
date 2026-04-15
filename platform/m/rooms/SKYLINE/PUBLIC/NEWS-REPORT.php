<?php 
openSky("SKYLINE SYSTEM REPORTS");
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

bigHeading("Report a SKYLINE UPDATE");
getTool("postBASIC","NewAdd");
closeSky();
