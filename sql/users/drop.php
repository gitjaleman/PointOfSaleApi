<?php 
  require '../db.php';
  $con = new conn;
  $con ->set_charset('utf8');
  $sql="DROP TABLE `users` ";
  $con->query($sql);

?>