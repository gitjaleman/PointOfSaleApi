<?php 
  require '../db.php';
  $con = new conn;
  $con ->set_charset('utf8');
  $sql="TRUNCATE  `users` ";
  $con->query($sql);

?>


