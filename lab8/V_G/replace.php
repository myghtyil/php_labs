<?php
include "scripts.php";

$founded = $_POST["founded"];
$replacement = $_POST["replacement"];
$text = read("text.txt");
$rtext = str_replace($founded,$replacement,$text);
echo nl2br($rtext);
write("text.txt",$rtext);
include "index.html";
?>
