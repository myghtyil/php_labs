<?php
include_once "scripts.php";

$red_art = $_GET['article'];
$red_name = $_GET['name'];

$arr = read('base.txt');
$arr[$red_art] = $red_name;

unlink("base.txt");
write("base.txt",$arr);
include "A.php" ;
?>
