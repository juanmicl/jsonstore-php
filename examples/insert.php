<?php
include __DIR__ . "/../vendor/autoload.php";

$jsonstore = new \juanmicl\jsonstorePHP\JsonStore();

$token = '813d6f1c0054ba2dba795dd735023d4dbfcaa71b06d8f1b7e28b8b16a2df1efe';
$body = array(
  'name' => 'pepe',
  'age' => 18
);

// null for auto increment row
echo $jsonstore->insert($token, 'user', null, $body);
?>
