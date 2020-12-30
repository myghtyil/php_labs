<?php
include_once "scripts.php";

$arr = read("base.txt");
echo '№ .. Фамилия<br>';
foreach ($arr as $key => $value)
{
    echo(($key+1).' .... '.$value.'<br>');
}
 ?>
<form action="add.php" method="get">
  <b>Добавление</b><br>
  <input type="text" name="name" required placeholder="Фамилия">
  <button type="submit">Добавить</button>
</form>
<form action="delete.php" method="get">
  <b>Удаление</b><br>
  <input type="text" name="del" placeholder="Фамилия или №">
  <button type="submit">Удалить</button>
</form>
<style>
  form {
    width: 250px;
    height: 50px;
    border: 3px solid #000;
    border-radius: 10px;
  }
 </style>
