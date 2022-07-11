<?php 
  require '../db.php';
  $con = new conn;
  $con ->set_charset('utf8');
  $sql="INSERT INTO `users` (`id`, `username`, `userpass`, `usertype`, `nombre`, `documento`) 
  VALUES (NULL, 'JALEMAN', '123456', '0', 'JAVIER ALEMAN', '1118167612') ";
  $con->query($sql);

?>