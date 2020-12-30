<?php
include "scripts.php";

$arr = read('base.txt');
$found = $_GET["founded"];
if (isset($_GET["found_all"]))
{
  $rez = false;
  foreach ($arr as $key => $name)
  {
    $pos = strpos($name,$found,0);
    if  ($pos === false)
    {    }
    else
    {
      echo ($name.' - - - '.$key."<br>");
      $rez = true;
    }
  }
  if ($rez == false)
  {
    echo "Ничего не найдено<br>";
  }
}
if (isset($_GET["found_one"]))
{
  $found = strip_tags(trim($found,$mask="&^*#!@№$%:;?() \t\n\r\0\x0B"));
  $rez = false;
  foreach ($arr as $key => $name)
  {
    $fstr = stristr($name,$found);
    if  ($fstr === false)
    {

    }
    else
    {
      if (strlen($found) == strlen($name))
      {
        echo ($name.' - - - '.$key."<br>");
        $rez = true;
      }
    }
  }
  if ($rez == false)
  {
    echo "Ничего не найдено. <br>";
  }
}

?>
