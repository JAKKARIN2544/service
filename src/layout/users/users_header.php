<?php session_start()?>
<?php require_once 'config/ConnectDB/connect.php'?>
<?php require_once 'config/SQL/select_data.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SERVICE APP</title>
  <link rel="icon" type="image/x-icon" href="assets/dist/img/tools-solid.svg" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="assets/dist/css/index.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css"/>
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.dataTables.min.css"/>
  
</head>

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <!--<img class="animation__shake" src="" alt="" height="60" width="60">-->
  </div>