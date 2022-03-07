<?php
$localhost = 'localhost';
$root = "root";
$password = "";
$DB = "t_phase";
$connect = mysqli_connect($localhost, $root, $password, $DB);

if (mysqli_connect_errno()) {
  // if( date('d-m-y') )
  // {
  //   echo date('d-m-y');
  // }
  //   die();
  // echo "Failed to connect to MySQL: " . mysqli_connect_error();


  // exit();
}