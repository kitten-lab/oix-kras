<?php 
SKY__AUTH(
    /*MOD_SLUG*/     "DRL", 
    /*MOD_DISPLAY*/  "Danielle Leve (Rudolph)", 
    
    /*DOM_SLUG*/     "portfolio", 
    /*DOM_DISPLAY*/  "portfolio",

    /*ROOM_SLUG*/    "tiles_Casework", 
    /*ROOM_DISPLAY*/  "Tiles: Detective: Case Work",

    /*ROOM_FLAVOR*/  "tiles_casework"
);

openSky('Portfolio for Danielle Leve');
section('background-image: url(' . i_root . '/dani-leve/portfolio/tiles_bg.png); background-repeat: no-repeat; background-position:top center; background-size:cover','case_study');
section('','case_study');
section('margin:20px;','case_study');
medHeading("TILES");
    bigHeading("DETECTIVE: CASE WORK");
    medHeading("A man checks in and never leaves. A key returned by that which never leaves.");
    medHeading("Stories are strange in this town. How do the pieces fit together?");

    leaf("NARRATIVE");
    section('width:60%; font-size:.8rem',"");
        leaf("This town tells the same stories over and over, yet they never sound quite the same. Places repeate, details shift. People are never where they said they would be.
        
        I work the case anyways. It is what I was born to do.");
    close_section();
    leaf("SYSTEM OVERVIEW");
    section('width:60%; font-size:.8rem',"");
        leaf("This is a prototype where I am exploring how slot machine mechanics can be used to generate narrative meaning instead of just payouts. Instead of winning money, the player earns fragments - atmosphere shifts, clues, and weighted signals - that slowly build into a story.
        
        I wanted to test whether the same psychological loops used in slow machines and freemium systems could be redirected toward meaning-making instead of pure reward extraction.");
    close_section();
    leaf("INTERACTION/GAMEPLAY");
    section('width:60%; font-size:.8rem',"");
        leaf("Simple slot mechanics with no bonus features. You begin in the Office of a detective. At the first win, a case will begin. Each subsequent win on the game will progress the story through fragmented narrative pieces.
        
        - Low paying symbols shift the ATMOSPHERE
        - Medium paying symbols offer clues
        - High outcome symbols add emphasis and weight to a clue
        - Special outcome symbols heavily reinforce or prioritize certain narrative elements");
    close_section();
    leaf("PROTOTYPE");
    getTool("tiles", "GetCaseWork");
close_section();

close_section();

closeSky();

 ?>