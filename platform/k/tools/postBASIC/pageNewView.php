
<?php 
include __DIR__ . '/../parsedown/Parsedown.php';
require __DIR__ . '/../../systems/rehydrateSelf.php';
require_once __DIR__ . '/../skyGenesis/functions.php'; //GET SHADOW PROD TOGGLE
$SHADOW_PROD_TOGGLE = SHADOW_PROD_ENV(false);
$ROUTE__LINE = ROUTE('d', $SHADOW_PROD_TOGGLE);

    $TOOL_FUNC = "LOG__POST";
    $TOOL_LOC = "postBASIC";
    $TOOL_NAME = "actorAdd";

$id = $_GET['id'];
$room = $_GET['w'];
$ROUTE = $ROUTE__LINE . $TOOL_LOC . '/' . $GLOBALS[$site]['SYS_SLUG'] . '/' . $GLOBALS[$site]['DOM_SLUG'] . '/';
    
  $CHEST = $ROUTE . $room . '.data.json';
  

$CHEST_THINGS = json_decode(file_get_contents($CHEST), true);

$Parsedown = new Parsedown();

foreach ($CHEST_THINGS as $TIMBER) {
    $content = $TIMBER['content']['timber'];
  if ($id == $TIMBER['CUID']) {
    echo "<h1>" . $content['topic'] . "</h1>";
    echo $Parsedown->text($content['leaf']);
  }
}

echo '<br><a href="javascript:history.go(-1)" title="Return to previous page">« Go back</a>';
?>
</div>