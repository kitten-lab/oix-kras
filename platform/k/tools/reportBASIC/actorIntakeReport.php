<?php
require_once __DIR__ . '/../../systems/rehydrateSelf.php';
require_once __DIR__ . '/../skyGenesis/functions.php'; //GET SHADOW PROD TOGGLE
$SHADOW_PROD_TOGGLE = SHADOW_PROD_ENV(false);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $POST__SYS =         $_POST['POST__SYS'];
    $POST__PV =          $GLOBALS['pv'];
    $POST__TIMEZONE =    $_POST['POST__TZ'];

    // CHANGE PER TOOL //
  $FROM__REPORTER = $_POST['POST__REPORTER']; 
  $POST__TIMBER_TOPIC = $_POST['POST__TIMBER_TOPIC']; 
  $POST__TIMBER_LEAF = $_POST['POST__TIMBER_LEAF']; 


    $RAW_TAGS = $_POST['POST__TAGS'] ?? '';
    $GLOBALS['TAGS'] = array_filter(array_map(function($q){
        return strtolower(trim($q));
    }, explode(';', $RAW_TAGS)));


    ## TOOL SIG FILE
    $TOOL_FUNC = "INTAKE A REPORT";
    $TOOL_LOC = "reportBASIC";
    $TOOL_NAME = "IntakeReport";
        ## SET YOUR KDE FOR THIS TOOL ##
        $KDE__ERROR_TYPE = $TOOL_FUNC . " DUPLICATE REJECTED";
        $KDE__SOURCE = $TOOL_NAME;
        $KDE__ECHO_CHAIN = $POST__SYS . ' > ' . $POST__DOM . ' > ' . $POST__MOD;
        $KDE__ERROR = "KDE, something failed.";
        ################################

    $cUID = 'cUID-' . strtoupper(bin2hex(random_bytes(8)));
        $CHEST__HEADER = "POSTED:" . $TOOL_LOC;
        $CHEST__CONTEXT = $POST__LOG_TOPIC;
        $CHEST__ACTOR = $TOOL_NAME;
        $CHEST__EVENT = $TOOL_FUNC;
        $CHEST__EVENT_LOCATON = $TOOL_LOC;

    // DO NOT TOUCHY //

        $event_time = (int)filter_var($_POST['POST__EVENT_UNIX'], FILTER_SANITIZE_NUMBER_INT);

        $unix = time();
        $tzone = $POST__TIMEZONE;
        $ms = round(microtime(true) * 1000);
        $time = new DateTime("@$unix");
        $time->setTimezone(new DateTimeZone($tzone));
        $timezone = $time->format("e");
        $localtime = $time->format("h:i:sA");

        if (!$event_time == '') {
            $tpstime = $event_time;
        } else {
            $tpstime = $unix;
            $event_time = $unix;
        }
    $event_calc = new DateTime("@$event_time");
        $simpledate = $event_calc->format('Y-m-d');
        $simpleyear = $event_calc->format('Y');

        function buildTPS($unix, $ms,$tzone, $event_time) {
            $tpsDT = new DateTime("@$unix");
            $tpsDT->setTimezone(new DateTimeZone("UTC"));
            $year = (int)$tpsDT->format('x');

            return [
                "import_unix" => time(),
                "event_unix" => $event_time,
                "POST__TZONE" => $tzone,
                "TPS__TZONE" => "UTC",
                "TPS__netLoop" => (int)$tpsDT->format('B'),
                "TPS__millennium" => intdiv($year, 1000),
                "TPS__century" => intdiv($year, 100),
                "TPS__decade" => intdiv($year, 10),
                "TPS__year" => $year,
                "TPS__leap" => (int)$tpsDT->format('L'),
                "TPS__month" => (int)$tpsDT->format("n"),
                "TPS__week" => (int)$tpsDT->format("W"),
                "TPS__dayOfYear" => (int)$tpsDT->format("z"),
                "TPS__dayOfMonth" => (int)$tpsDT->format("j"),
                "TPS__dayOfWeek" => (int)$tpsDT->format("w"),
                "TPS__hour" => (int)$tpsDT->format("G"),
                "TPS__minute" => (int)$tpsDT->format("i"),
                "TPS__second" => (int)$tpsDT->format("s"),
                "TPS__ms" => $ms % 1000,
            ];
            }

    $tpsDATA = buildTPS($tpstime,$ms,$tzone, $event_time);
    $tUID = 'tUID-' . $simpledate . '.' . strtoupper(bin2hex(random_bytes(3)));

  
// ============================================================================
// OKAY LETS MAKE A CHESTER CRATE OF THIS BIT OF STUFFS! 

// TIME TO MAKE A CRATE
$ROUTE__LINE = ROUTE('d', $SHADOW_PROD_TOGGLE);

 $ROUTE = $ROUTE__LINE . $TOOL_LOC . '/' . $GLOBALS[$site]['SYS_SLUG']  . '/' . $GLOBALS[$site]['DOM_SLUG'] . '/';
    if (!is_dir($ROUTE)) { mkdir($ROUTE, 0775, true); }   
 $ECHO_ROUTE = $ROUTE__LINE . 'trackerKEEPER/' . $simpleyear . '/';
    if (!is_dir($ECHO_ROUTE)) { mkdir($ECHO_ROUTE, 0775, true); }   
 
  $CHEST = $ROUTE . '/' . $GLOBALS[$site]['ROOM_SLUG'] . '.data.json';
  $ECHO_CHEST = $ECHO_ROUTE . $simpledate . '.echo.json';
  
  $json = file_get_contents($CHEST);
  $ECHO_json = file_get_contents($ECHO_CHEST);
  $CHEST_THINGS = json_decode($json, true);
  $ECHO_CHEST_THINGS = json_decode($ECHO_json, true);

  function buildCHEST($site, $cUID,$POST__TIMBER_TOPIC,$POST__TIMBER_LEAF,$FROM__REPORTER,$POST__PV,$TOOL_LOC,$TOOL_NAME, $unix, $event_time, $tUID,$timezone){
    return [
            "CUID" => $cUID, 
            "chester_crate schema" => 3,
            // CUSTOM CHEST DETAILS HERE
            "content" => [
                "timber" => [
                    "topic" => $POST__TIMBER_TOPIC,
                    "leaf" => $POST__TIMBER_LEAF,
                ]
            ],
            "route" => [
                "from" => [
                    "mod" => $FROM__REPORTER,
                ],
                "to" => [
                    "mod" => $GLOBALS['TO']['MOD_SLUG'],
                    "room" => $GLOBALS['TO']['ROOM_SLUG'],
                    "dom" => $GLOBALS['TO']['DOM_SLUG'],
                    "sys" => $GLOBALS['TO']['SYS_SLUG'],
                ],
            ],
            "tags" => $GLOBALS['TAGS'],
            "environment" => [
                "viewport" => $POST__PV,
                "sys" => [ 
                    "slug" => $GLOBALS[$site]['SYS_SLUG'], 
                    "display" => $GLOBALS[$site]['SYS_DISPLAY'], 
                    ],
                "dom" => [ 
                    "slug" => $GLOBALS[$site]['DOM_SLUG'], 
                    "display" => $GLOBALS[$site]['DOM_DISPLAY'], 
                    ],
                "room" => [ 
                    "slug" => $GLOBALS[$site]['ROOM_SLUG'], 
                    "display" => $GLOBALS[$site]['ROOM_DISPLAY'], 
                    ],
                "mod" => [ 
                    "slug" => $GLOBALS[$site]['MOD_SLUG'], 
                    "display" => $GLOBALS[$site]['MOD_DISPLAY'], 
                    ],],
            "tool" => [
                "name" => $TOOL_LOC,
                "function" => $TOOL_NAME,
            ],
            "origin" => [
                "material" => [ 
                    "type" => $GLOBALS['MATERIAL']['TYPE'], 
                    "source" => [
                        "name" =>  $GLOBALS['MATERIAL']['SOURCE']['NAME'],
                        "id" => $GLOBALS['MATERIAL']['SOURCE']['ID'],
                        "created_on" => $GLOBALS['MATERIAL']['SOURCE']['CREATED'],
                        "last_modified" => $GLOBALS['MATERIAL']['SOURCE']['LAST_MODIFIED'],
                        ],
                "reference" => [
                    "ref" => 
                        $GLOBALS['MATERIAL']['REFS'],
                ],
                "notes" => $GLOBALS['MATERIAL']['DETAILS'],
            ],],

            //DO NOT MODIFY BELOW
            "TPS" => [
                "ingest_unix" => $unix,
                "event_unix" => $event_time,
                "TUID" => $tUID, 
                "timezone" => $timezone,
            ]
  ];
}

  if (!$CHEST_THINGS) {
    $CHEST_THINGS = [];
  }
  if (!$ECHO_CHEST_THINGS) {
    $ECHO_CHEST_THINGS = [];
  }

  $CHEST_THINGS[$cUID] = buildCHEST($site, $cUID, $POST__TIMBER_TOPIC,$POST__TIMBER_LEAF,$FROM__REPORTER,$POST__PV,$TOOL_LOC,$TOOL_NAME, $unix, $event_time, $tUID,$timezone);
  $ECHO_CHEST_THINGS[$cUID] = buildCHEST($site, $cUID,$POST__TIMBER_TOPIC,$POST__TIMBER_LEAF,$FROM__REPORTER,$POST__PV,$TOOL_LOC,$TOOL_NAME, $unix, $event_time, $tUID,$timezone);
  

  file_put_contents($CHEST, json_encode($CHEST_THINGS, JSON_PRETTY_PRINT));
  file_put_contents($ECHO_CHEST, json_encode($ECHO_CHEST_THINGS, JSON_PRETTY_PRINT));
// ============================================================================
// YAY DONE!
// ============================================================================
// OH $@%! -- DON'T FORGET YOUR TPS REPORT
// ============================================================================
  $recordKeeper = $ROUTE__LINE . 'tpsREPORTER/' . $simpleyear . '/';
    if (!is_dir($recordKeeper)) { mkdir($recordKeeper, 0775, true); }
  
  $tpsReport = $recordKeeper . '/' . $simpledate . '.tps.json';
  $json = file_get_contents($tpsReport);
  $tpss = json_decode($json, true);

    if (!$tpss) {
        $tpss = [];
    }

    if (isset($tpss[$tUID])) {
        die("Already exists in this Location.");
    }

    $tpss[$tUID] = [
        "TUID" => $tUID,
        "CUID" => $cUID,
        "tps_schema" => 3,
        "TPS__REPORT" => $tpsDATA,
    ];

  file_put_contents($tpsReport, json_encode($tpss, JSON_PRETTY_PRINT));


}