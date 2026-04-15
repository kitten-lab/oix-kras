<?php
openSky("SKYLINE FRONT DESK");
SKY__AUTH(
    $site,
    $sys,
    $site,
    "SKYLINE-AGENT", // storage slug of #MOD
    "SKYLINE PUBLIC OFFICIAL", // display name of MOD
    "PUBLIC", // building slug #DOM
    "PUBLIC OFFICE", // building display name
    "FRONT-DESK", // room slug #ROOM
    "WELCOME DESK",// room display name

    "skyline-standard",
);


bigHeading("Welcome to SKYLINE On INTERA.");
medHeading("THANK YOU FOR CHECKING IN.");

leaf("Thank you for entering our SIGHT. We CUKRA.");

leaf("Consider submitting a vision report. We see what you see. Let us know.");
summonTool('reportBASIC', 'IntakeReport');
medHeading("Check-ins");
summonTool('reportBASIC', 'CheckInList');

section($left,"width: 50%;","");

close_section();

closeSky();
?>