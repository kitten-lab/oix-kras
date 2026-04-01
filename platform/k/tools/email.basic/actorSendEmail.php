<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

require_once(__DIR__ . '/../../configs/env_config.php');
  $dir =  __DIR__ . '/../../../d/email.basic/' . $_POST['betSys'];

if (!is_dir($dir)) {
    mkdir($dir, 0775, true);
}
  $file = $dir . '/data.json';

  // Read existing data
  $json = file_get_contents($file);
  $posts = json_decode($json, true);

  if (!$posts) {
    $posts = [];
  }

  // Create new post
  $newPost = [
    "ch.IMP_OIC" => bin2hex(random_bytes(3)),
    "gaia.UNIX" => time(), 
    "ch.IMP_EPC" => $_POST['chIMP_EPC'],
    "ch.IMP_LIC" => date('\RY \E\Dm:\E\Tw:\E\Nd'),
    "ch.IMP_TP" => date('\Dg:\Ti:\Ns'),
    "bet.ORIGIN" => 'b:||' . $_POST['betSys'] . '|' . $_POST['betDom'] . '^mod:' . $_POST['betMod'],
    "to_bet.dom" => $_POST['to_betDom'],
    "to_bet.mod" => $_POST['to_betMod'],
    "to_bet.sys" => $_POST['to_betSys'],
    "from_bet.dom" => $_POST['from_betDom'],
    "from_bet.mod" => $_POST['from_betMod'],
    "from_bet.sys" => $_POST['from_betSys'],
    "log.leafTopic" => $_POST['log_leafTopic'],
    "log.leafText" => $_POST['log_leafText']
  ];

  // Add it
  $posts[] = $newPost;

  // Save it
  file_put_contents($file, json_encode($posts, JSON_PRETTY_PRINT));


}

