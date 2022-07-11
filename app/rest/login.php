<?php
  require "header.php";


  http_response_code(200);

  $rsta = null;
  switch ($_SERVER['REQUEST_METHOD']){
    case 'GET':
      $rsta = login();
    break;

  }

  function login(){
    $username = $_GET['username'];
    $userpass = $_GET['userpass'];
    $con = new conn;
    $con ->set_charset('utf8');
    $sql = "SELECT * FROM  `users` WHERE  username = '$username' AND userpass = '$userpass' ";
    $result = $con->query($sql);
    $num = mysqli_num_rows($result);
    while($d=mysqli_fetch_assoc($result)){
      $data['data'][] = $d;
    }
    $data['num']=$num;
    $data['sql']=$sql;
    return $data;
  }

  echo  json_encode($rsta);

?>