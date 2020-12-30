<?php
function get_cont()
{
  if (file_exists("a.txt"))
    echo file_get_contents("a.txt");
  else echo "Файла не существует";
}
function get_cont_b()
{
  if (file_exists("b.txt"))
    echo file_get_contents("b.txt");
  else echo "Файла не существует";
}

function write_cont(string $cont)
{
  if(file_put_contents("a.txt",$cont))
    echo "Файл перезаписан";
  else echo "Ошибка записи";
  echo "<a href='read.php'><br>прочитать файл</a>";
}

function write_cont_b(string $cont)
{
  if(file_put_contents("b.txt",$cont,FILE_APPEND))
    echo "Файл перезаписан";
  else echo "Ошибка записи";
  echo "<a href='readb.php'><br>прочитать файл</a>";
}
?>
