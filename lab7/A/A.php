<?php
include_once "scripts.php";

$arr = read("base.txt");
echo 'Артикул  Товар<br>';
foreach ($arr as $key => $value)
{
    echo($key.'     '.$value.'<br>');
}
 ?>
<form action="redact.php" method="get">
  <b>Редактирование и добавление</b><br>
  Если существует запись с указанным артикулом<br>
  изменяет наименование соответствующего товара<br>
  <input type="text" name="article" >
  <input type="text" name="name" >
  <button type="submit">Запись</button>
</form>
<form action="delete.php" method="get">
  <b>Удаление</b><br>
  чтобы удалить запись из списка, введите <br>
  артикль или наименование<br>
  <input type="text" name="del" >
  <button type="submit">Удалить</button>
</form>
<style>
  form {
    width: 400px;
    height: 100px;
    border: 3px solid #000;
    border-radius: 10px;
  }
 </style>
