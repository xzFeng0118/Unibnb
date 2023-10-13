<?php

include ('db_conn.php'); //db connection
include ('session.php');

if (isset($_POST['register'])){
  $firstname = $_POST['regifname'];
  $lastname = $_POST['regilname'];
  $email = $_POST['regiemail'];
  $mobile = $_POST['regimobile'];
  $password = $_POST['regipwd'];
  $address = $_POST['regiaddress'];
  $abn = $_POST['regiabn'];
  $access = $_POST['regiaccess'];
}

  // $register = "INSERT INTO members (firstname, lastname, ) VALUES ('$firstname', '$lastname')";

  $register = "INSERT INTO `members` (`firstname`, `lastname`, `email`, `phone`, `password`, `abn`, `access`) VALUES ('$firstname', '$lastname', '$email', '$mobile', '$password', '$abn', '$access')";


  $mysqli->query($register);

   echo "<script type='text/javascript'>alert('You are successfully registered!');
  window.location='index.php';</script>"

  
 ?>
