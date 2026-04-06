
<?php 
require __DIR__ . '/../../incl/inits/nameSelf.php';
$config = $GLOBALS['plogBasicView'] ?? []; 

include __DIR__ . '/../parsedown/Parsedown.php';
$Parsedown = new Parsedown();


$path = $sonar . 'd/plogBasic/' . $sys . '/' . $dom . '/data.json';
$logs = json_decode(file_get_contents($path), true);

$go = $_GET['go'];
$cUID = array_keys($logs);
$cUID = $cUID[0];

foreach ($logs as $log) {
  if ($go == $cUID) {
    echo "<h1>{$log['log.leafTopic']}</h1>";
    echo $Parsedown->text($log['log.leafText']);
  }
}

echo '<br><a href="javascript:history.go(-1)" title="Return to previous page">« Go back</a>';
?>
</div>