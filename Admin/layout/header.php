<?php include "../db.php"; ?>
<?php

session_start();

if (!$_SESSION['email']) {

  header("location:../website/AdminLogin.php");
}
if (isset($_POST['logout'])) {
  session_destroy();
  unset($_SESSION['email']);
  header("location:../website/AdminLogin.php");
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Admin-Pannel</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="./assets/css/mdb.min.css" />
  <!-- Custom styles -->
  <link rel="stylesheet" href="./assets/css/admin.css" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
</head>

<body>
  <style>
    .input_style:focus {
      border: 1px solid #0d6efd !important;
      z-index:0!important;
    }

    .input_style {
      border: 1px solid grey !important;
      z-index:1!important;
      position: relative!important;
    }
    .l_js{
      background-color: white !important;
      color: rgba(0, 0, 0, .6) !important;
    }

    .l_js:hover {
      background-color: white !important;
      color: rgba(0, 0, 0, .6) !important;

    }
  </style>