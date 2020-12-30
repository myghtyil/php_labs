<?php
include_once "scripts.php";

$towers = read("towers.txt");
echo "  Ходов сделано: ".$towers[3];
?>
<form action="start_tower.php" method="get">
  <button type="submit">сбросить</button>
</form>
<form action="move_1.php" method="get" class = 'towers'>
  <?php
  foreach ($towers['0'] as $key => $value)
  {
      echo($value.'<br>');
  }
  ?>
  <button type="submit" name= "to_2">2</button>
  <button type="submit" name= "to_3">3</button>
</form>
<form action="move_2.php" method="get" class = 'towers'>
  <?php
  foreach ($towers['1'] as $key => $value)
  {
      echo($value.'<br>');
  }
  ?>
  <button type="submit" name= "to_1">1</button>
  <button type="submit" name= "to_3">3</button>
</form>
<form action="move_3.php" method="get" class = 'towers'>
  <?php
  foreach ($towers['2'] as $key => $value)
  {
      echo($value.'<br>');
  }
  ?>
  <button type="submit" name= "to_1">1</button>
  <button type="submit" name= "to_2">2</button>
</form>
<style>
  body {
    background: #A9A9A9;
   }
  .towers {
    width: 250px;
    height: 200px;
    border: 3px solid #000;
    border-radius: 5px;
    text-align: center;
    display: inline-block;
  }
 </style>
