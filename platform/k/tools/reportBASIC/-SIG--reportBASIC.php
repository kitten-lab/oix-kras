<?php /* 

==================== C O N F I G . f i l e  ==================== 
================================================================
----------------------------------------------------------------
~                terminal navigation config file              ~
----------------------------------------------------------------
Listen, you are going to need to TRUST THE [] colors. They 
don't lie. But sometimes, you will be confused by this nest.
That's okay. Each time it WILL GET EASIER.  -abl 
--------------------------------------------------------------*/
$TOOL = "reportBASIC";

$GLOBALS[$TOOL] = [
    "NAME" => "reportBASIC",
    "TYPE" => "post",
    "VERSION" => 2,
    "SIGFIG" => [
        "skyline-standard" => [

            "IntakeReport" => [
                "Reporter"          => "Report Maker",
                "Reporter_plhldr"   => "Name Yourself",
                "Reporter_default"  => "",
                "Topic"             => "Report Topic",
                "Topic_plhldr"      => "The Reason for your Report",
                "Text"              => "Report Contents",
                "Text_plhldr"       => "Enter your report here.",
                "UNIX"              => "FOR INTERNAL USE ONLY",
                "UNIX_plhldr"       => "KNOWN U-StampS ONLY",
                "Confirmation_Msg"  => "You have been witnessed.",
                "Submit_Button"     => "Submit Report",
                
            ]
        ],
        "tee-hee-secrets" => [

            "IntakeReport" => [
                "Reporter"          => "The Lil' Secret Keeper",
                "Reporter_plhldr"   => "Name Yourself",
                "Reporter_default"  => "ANON-XXX",
                "Topic"             => "What Did Ya Know?",
                "Topic_plhldr"      => "The Reason for your Report",
                "Text"              => "Tell me ALL the deets!",
                "Text_plhldr"       => "Enter your report here.",
                "UNIX"              => "FOR INTERNAL USE ONLY",
                "UNIX_plhldr"       => "KNOWN U-StampS ONLY",
                "Confirmation_Msg"  => "TEE HEE!",
                "Submit_Button"     => "WHISPER TO THE CU",
                
            ]
        ]
    ],
    
]

?>