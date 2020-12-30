<?php
include "scripts.php";
$towers = read("towers.txt");
if (isset($_GET["to_1"]))
{
  transfer_ringle($towers, 1, 0);
}
if (isset($_GET['to_3']))
{
  transfer_ringle($towers, 1, 2);
}
check_towers($towers);
unlink('towers.txt');
write("towers.txt",$towers);
include "C.php"
?>
