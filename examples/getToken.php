<?php
include __DIR__ . "/../vendor/autoload.php";

$jsonstore = new \juanmicl\jsonstorePHP\JsonStore();

echo $jsonstore->getToken();
?>
