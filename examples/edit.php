<?php
include __DIR__ . "/../vendor/autoload.php";

$jsonstore = new \juanmicl\jsonstorePHP\JsonStore();

$token = '813d6f1c0054ba2dba795dd735023d4dbfcaa71b06d8f1b7e28b8b16a2df1efe';
$body = 21;

echo $jsonstore->edit($token, 'usuario', '1', 'edad', $body);
?>
