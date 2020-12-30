<?php
function my_max(&$maxx)
{
  $izm_li = false;
  $kol_args = func_num_args();
  $args = func_get_args();
  foreach ($args as $arg)
  {
    if($arg > $maxx)
    {
      $maxx = $arg;
      $izm_li = true;
    }
  }
  return $izm_li;
}
 ?>
