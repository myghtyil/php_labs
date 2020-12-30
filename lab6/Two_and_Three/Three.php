<?php
$lines = file("b.txt");
foreach($lines as $num => $line)
{
  echo $num.") ".$line;
}


 ?>
