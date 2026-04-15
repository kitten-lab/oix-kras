<?php 
require __DIR__ . '/../../systems/rehydrateSelf.php';
require_once __DIR__ . '/../skyGenesis/functions.php'; //GET SHADOW PROD TOGGLE
$SHADOW_PROD_TOGGLE = SHADOW_PROD_ENV(false);
$ROUTE__LINE = ROUTE('d', $SHADOW_PROD_TOGGLE);

    $TOOL_LOC = "reportBASIC";
    $config = $GLOBALS['postBASIC']['List'] ?? []; 


$ROUTE = $ROUTE__LINE . $TOOL_LOC . '/' . $GLOBALS[$site]['SYS_SLUG'] . '/' . $GLOBALS[$site]['DOM_SLUG'] . '/';
    if (!is_dir($ROUTE)) { mkdir($ROUTE, 0775, true); }   
    
  $CHEST = $ROUTE . '/' . $GLOBALS[$site]['ROOM_SLUG'] . '.data.json';
  

$CHEST_THINGS = json_decode(file_get_contents($CHEST), true);
usort($CHEST_THINGS, function($a, $b) {
    return $b['TPS']['event_unix'] <=> $a['TPS']['event_unix'];
});


foreach ($CHEST_THINGS as $TIMBER) {
  $content = $TIMBER['content']['timber'];
  $unix = $TIMBER['TPS']['event_unix'];
    $tpsDT = new DateTime("@$unix");
            $tpsDT->setTimezone(new DateTimeZone("America/New_York"));
            $date = $tpsDT->format('m/d/y h:iA');
echo $date . ' ' . $TIMBER['route']['from']['mod'] . " CHECKED IN - ";
echo $content['topic'] . " <a href='?w=" . $GLOBALS[$site]['ROOM_SLUG'] . '&id=' . $TIMBER['CUID'] . "'>Details</a>";

echo "<br>";
}
?>
