<?php /* Page Title Generator */

$currentFile = $_SERVER["PHP_SELF"];

/* The 'explode' and 'implode' string functions allow you to remove 
/* the file path information for the current file, shave off the .php 
/* file extension, and then echo the file name sans extension, with 
/* 'ucwords' acting to capitalize the first character of the string. */

$parts = explode('/', $currentFile);
$parts = $parts[count($parts) - 1];
$name = explode('.', $parts);
unset ($name[count($name) - 1]);
$pageName = ucwords(implode('.',$name));
?>
