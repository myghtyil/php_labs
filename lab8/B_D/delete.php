<?php
include_once "scripts.php";

$del = $_GET['del'];
$arr = read('base.txt');

if (ctype_digit($del))
{
  unset($arr[$del]);
}
else
{
  foreach ($arr as $key => $value)
  {
      if($value == $del)
      {
        unset($arr[$key]);
      }
  }
}

unlink("base.txt");
write("base.txt",$arr);
include "A.php" ;
?>
