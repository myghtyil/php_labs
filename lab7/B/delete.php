<?php
include_once "scripts.php";

$del = $_GET['del'];
$group = read('base.txt');

if (ctype_digit($del))
{
  unset($group[$del]);
}
else
{
  foreach ($group as $key => $value)
  {
      if($value == $del)
      {
        unset($group[$key]);
      }
  }
}
sort($group);
unlink("base.txt");
write("base.txt",$group);
include "B.php" ;
?>
