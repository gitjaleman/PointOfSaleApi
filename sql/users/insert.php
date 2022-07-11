<?php 
  require '../db.php';
  $con = new conn;
  $con ->set_charset('utf8');
  $sql="INSERT INTO `users` (`id`, `username`, `userpass`, `usertype`, `nombre`, `documento`,`clave`) 
  VALUES (NULL, 'JALEMAN', '123456', '0', 'JAVIER ALEMAN', '1118167612','b9ae07e3b17eaf48953ca55180c6dbec') ";
  $con->query($sql);

?>