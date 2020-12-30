<?php
include "scripts.php";
$towers = read("towers.txt");
if (isset($_GET["to_2"]))
{
  transfer_ringle($towers, 0, 1);
}
else if (isset($_GET['to_3']))
{
  transfer_ringle($towers, 0, 2);
}
check_towers($towers);
unlink('towers.txt');
write("towers.txt",$towers);
include "C.php"
?>
