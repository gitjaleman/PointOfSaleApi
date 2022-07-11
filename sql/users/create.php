<?php 
  require '../db.php';
  $con = new conn;
  $con ->set_charset('utf8');
  $sql="CREATE TABLE users(
    id int(2) PRIMARY KEY AUTO_INCREMENT,
    username varchar(12),
    userpass varchar(12),
    usertype int(1),
    nombre varchar(30),
    documento varchar(20),
    clave varchar(60)
  )";
  $con->query($sql);

?>