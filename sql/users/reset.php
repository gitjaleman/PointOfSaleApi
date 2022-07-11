<?php 
  require '../db.php';
  $con = new conn;
  $con ->set_charset('utf8');
  $sql1="DROP TABLE `users` ";
  $sql2="CREATE TABLE users(
    id int(2) PRIMARY KEY AUTO_INCREMENT,
    username varchar(12),
    userpass varchar(12),
    usertype int(1),
    nombre varchar(30),
    documento varchar(20),
    clave varchar(60)
  )";
  $sql3="INSERT INTO `users` (`id`, `username`, `userpass`, `usertype`, `nombre`, `documento`,`clave`) 
  VALUES (NULL, 'JALEMAN', '123456', '0', 'JAVIER ALEMAN', '1118167612','b9ae07e3b17eaf48953ca55180c6dbec') ";
  $con->query($sql1);
  $con->query($sql2);
  $con->query($sql3);

?>
