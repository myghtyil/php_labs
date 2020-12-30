<?php
function my_rename(string $page_name)
{
  if($page_name != "")
    echo "<title>".$page_name."</title>";
  else
    echo "<title>no name</title>";
}
 ?>
