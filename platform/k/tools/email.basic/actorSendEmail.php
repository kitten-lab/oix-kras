<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

require_once(__DIR__ . '/../../configs/env_config.php');
  $dir =  __DIR__ . '/../../../d/email.basic/' . $_POST['sys'];

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
    "toDom" => $_POST['toDom'],
    "toMod" => $_POST['toMod'],
    "fromDom" => $_POST['fromDom'],
    "fromMod" => $_POST['fromMod'],
    "chronoKey" => 'e:||' . date('Y|\Rm:\Cw:\Sd\@\Rg:\Ci:\Ss:') . $mod,
    "subject" => $_POST['subject'],
    "body" => $_POST['body']
  ];

  // Add it
  $posts[] = $newPost;

  // Save it
  file_put_contents($file, json_encode($posts, JSON_PRETTY_PRINT));


}

