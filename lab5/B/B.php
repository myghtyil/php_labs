  <?php
  include "max.php";
  $max = 10;
  echo "<br>список параметров : 9,13,6,11,22";
  if(my_max($max,9, 13, 6, 11,22))
    echo "<br>max: ".$max;
  else
    echo "<br>max не изменился(= 10)";

  $max = 10;
  echo "<br>список параметров : 9,13,6,11";
  if(my_max($max,9, 13, 6, 11))
    echo "<br>max: ".$max;
  else
    echo "<br>max не изменился(= 10)";

  $max = 10;
  echo "<br>список параметров : 9,6,11";
  if(my_max($max,9, 6, 11))
    echo "<br>max: ".$max;
  else
    echo "<br>max не изменился(= 10)";

  $max = 10;
  echo "<br>список параметров : 9,6";
  if(my_max($max,9, 6))
    echo "<br>max: ".$max;
  else
    echo "<br>max не изменился(= 10)";

  $max = 10;
  echo "<br>список параметров : 11";
  if(my_max($max, 11))
    echo "<br>max: ".$max;
  else
    echo "<br>max не изменился(= 10)";

 ?>
