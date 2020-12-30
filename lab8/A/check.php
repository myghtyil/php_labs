<?php
$login = $_POST['login'];
$password = $_POST['password'];

if (strlen($password) < 8)
{
  echo "Пароль слишоком короткий! Введите больше 7 символов!";
  include "A.html";
}
else
{
  echo "Регистрация выполнена успешно!";
}
?>
