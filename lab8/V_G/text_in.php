<?php
include "scripts.php";

$text = $_POST['lt'];
if ($text != "")
{
  write("text.txt",$text);
}
$rtext = read("text.txt");
echo nl2br($rtext);
include "index.html";
?>
