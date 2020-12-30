<?php
include_once "scripts.php";
$sticks = array(
  '0' => array('OOO','OOOOO', 'OOOOOOO','OOOOOOOOO', 'OOOOOOOOOOO', 'OOOOOOOOOOOOO', 'OOOOOOOOOOOOOOO','OOOOOOOOOOOOOOOOO'),
  '1' => array('O','O','O','O','O','O','O','O'),
  '2' => array('O','O','O','O','O','O','O','O'),
  '3' => 0); #счётчик ходов
unlink('towers.txt');
write('towers.txt',$sticks);
include "C.php"
?>
