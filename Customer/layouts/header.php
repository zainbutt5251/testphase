<?php
include "../db.php";
session_start();

if (!$_SESSION['email']) {

  header("location:../website/index.php");
}
if (isset($_POST['logout'])) {
 
  session_destroy();
  unset($_SESSION['email']);
  header("location:../website/index.php");
}


include "../db.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Customer-Pannel</title>
  <!-- MDB icon -->
  <link rel="icon" href="./assets/img/" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="./assets/css/mdb.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
  <style>
    .heightr{
      height: 100%;
    }
  </style>