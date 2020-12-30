<?php
function write(string $file_name,$data)
{
  $sdata = serialize($data);
  if (!file_put_contents($file_name,$sdata))
     echo "Ошибка записи<br>";
}

function read(string $file_name)
{
  if (file_exists($file_name))
    return unserialize(file_get_contents($file_name));
  else
  {
    echo "Файла не существует";
    return NULL;
  }
}

function transfer_ringle(&$towers, $from, $to)
{
  foreach ($towers[$from] as $key => $value)
  {
      if ($value != 'O')
      {
        $pos = 0;
        foreach ($towers[$to] as $key2 => $value2)
        {
          if ($value2 == 'O')
          {
            $pos++;
          }
        }
        if ($pos < 8)
        {
          if ($value > $towers[$to][$pos] )
          {
            echo "Нельзя ставить большее кольцо на меньшее";
          }
          else
          {
            $towers[$to][$pos-1] = $value;
            $towers[$from][$key] = 'O';
          }
        }
        else
        {
          $towers[$to][$pos-1] = $value;
          $towers[$from][$key] ='O';
        }
        break;
      }
  }
}

function check_towers(&$towers)
{
  $hod = $towers[3];
  $towers[3] = $hod + 1;
  if($towers[0] == array('O','O','O','O','O','O','O','O'))
  {
    if($towers[1] == array('OOO','OOOOO', 'OOOOOOO','OOOOOOOOO', 'OOOOOOOOOOO', 'OOOOOOOOOOOOO', 'OOOOOOOOOOOOOOO','OOOOOOOOOOOOOOOOO'))
    {
      echo "Вы смогли сделать это за ".$towers[3]." ходов!";
    }
    else if($towers[2] == array('OOO','OOOOO', 'OOOOOOO','OOOOOOOOO', 'OOOOOOOOOOO', 'OOOOOOOOOOOOO', 'OOOOOOOOOOOOOOO','OOOOOOOOOOOOOOOOO'))
    {
      echo "Вы смогли сделать это за ".$towers[3]." ходов!";
    }
  }
}
 ?>
