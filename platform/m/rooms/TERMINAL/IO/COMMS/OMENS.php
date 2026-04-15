<?php
SKY__AUTH(
    "IO", // SITE TAG
    "TERMINAL", // SYS SLUG
    "TERMINAL.IO", // SYS DISPLAY
    "SDK-808", // storage slug of #MOD
    "SDK-808", // display name of MOD
    "IO", // building slug #DOM
    "IO", // building display name
    "plog-adder", // room slug #ROOM
    "POST.TXT",// room display name
    "skyline-standard"
);

SKY__ROUTE(
    "SKYLINE",
    "REPORT",
    "OM",
    "OMENS",
);

$print = $GLOBALS[$site];
$to = $GLOBALS['TO'];

openSky($print['ROOM_DISPLAY']);

section($c, "","pageTitle");
leaf($print['ROOM_DISPLAY']);
close_section();
medHeading($print['MOD_SLUG'] . " reporting to " . $to['MOD_SLUG'] . " at " . $to['SYS_SLUG']);
getTool('reportBASIC', 'IntakeReport');


closeSky();
?>