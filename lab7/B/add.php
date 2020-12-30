<?php
include_once "scripts.php";

$name = $_GET['name'];

$group = read('base.txt');
$group[] = $name;
sort($group);
unlink("base.txt");
write("base.txt",$group);
include "B.php" ;
?>
