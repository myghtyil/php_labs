<?php
 include ("head.php");
 my_rename($_POST["title_name"]);
?>
 <body>
   <form action="V.php" method="post">
     <input type="text" name="title_name" >
     <input type="submit" value="переименовать">
   </form>
 </body>
