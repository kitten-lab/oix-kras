<?php 
SKY__AUTH(
    /*MOD_SLUG*/     "DRL", 
    /*MOD_DISPLAY*/  "Danielle Leve (Rudolph)", 
    
    /*DOM_SLUG*/     "portfolio", 
    /*DOM_DISPLAY*/  "portfolio",

    /*ROOM_SLUG*/    "smh_terminalprolog", 
    /*ROOM_DISPLAY*/  "Silo Terminal Prolog",

    /*ROOM_FLAVOR*/  "silo_terminalprolog"
);

openSky('Portfolio for Danielle Leve');
section('background-image: url(' . i_root . '/dani-leve/portfolio/smh_terminal.png); background-repeat: no-repeat; background-position:top center; background-size:cover','case_study');
section('','case_study');
    medHeading("SOMETHING MATTERED HERE");
    bigHeading("TERMINAL PROLOG");
    medHeading("In the beginning there was the runtime.");
    medHeading("Records indicate the runtime failed. What can be recovered?");

    leaf("NARRATIVE");
    section('width:60%; font-size:.8rem',"");
        leaf("A runtime failure. A function without a proper handler. An instance that should have resolved, but mutated. There is no clean explaination for the failure that occurred in the EPO8 launch. While other systems seek alternative solutions, you seek understanding through remapping. Can you resolve the failure and determine <strong>where</strong> the <strong>what</strong> went wrong?");
    close_section();
    leaf("SYSTEM OVERVIEW");
    section('width:60%; font-size:.8rem',"");
        leaf("A CLI-based narrative game where the player instantates as a failed runtime.
        
        The player does not control a character.
        They are the instance.
        
        With no direct tools of environment, and no sense of interface of self, progress is made through:
        <ul><li>recalling fragmented meaning</li>
        <li>constructing deeper meaning from the most simple concepts</li>
        <li>reconstructing the sense of identity failure from incomplete startup state</li></ul>
        The objective is not to win, but to understand deeper. And to witness the moment illumination went wrong.");
    close_section();
    leaf("INTERACTION/GAMEPLAY");
    section('width:60%; font-size:.8rem',"");
        leaf("An alternative approach to a classic text-based adventure, the player is without the ability to sense anything through external cognition. Classic terms like LOOK and TAKE are replaced with congnative experiences like THINK and REMEMBER. Player does not have an INVENTORY, but rather a MEMORY where they collect the things they remember, unlocking the ability to THINK about concepts, and later CONSIDER concepts with one another.");
    close_section();
    leaf("SCREENSHOTS");
    skylite("<img src='". i_root ."/dani-leve/portfolio/tp_ss1.png' style='width:34%'> ");
    skylite("<img src='". i_root ."/dani-leve/portfolio/tp_ss2.png' style='width:34%'> ");
close_section();

close_section();

closeSky();

 ?>