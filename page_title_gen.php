<?php /* Page Title Generator */
$currentFile = $_SERVER["PHP_SELF"];
$parts = explode('/', $currentFile);
$parts = $parts[count($parts) - 1];
$name = explode('.', $parts);
unset ($name[count($name) - 1]);
$pageName = implode('.',$name);
?>
