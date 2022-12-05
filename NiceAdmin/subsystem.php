<?php 
  include 'header.php';
  include 'sidebar.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Subsystems - Alegario Cure Hospital</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Poppins&family=Quicksand&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 </head>

<!-- CSS style for subsystems -->
<style>
        #col {
            background-color: white;
            border: .1px solid gray;
            color: black;
            text-align: center;
            height: 15rem;
            font-size: 18px;
            background: white;
            border-radius: 5px;
            margin: 10px;
            backdrop-filter: blurd(10px);
            box-shadow: 5px 5px 5px rgba(0,0,0,.6);
            font-size: 25px;
            font-family: 'Inter', sans-serif;
            font-weight: 600;
        }

        #col a{
            text-decoration: none;
            color: black;
            border: 1px solid gray;
            border-radius: 50px;
            width: 40rem;
            padding: 10px;
            transition: .4s ease-in-out;
            font-size: 15px;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
        }

        #col a:hover{
            background: #57d8cd;
            border: none;
            color: white;
            border: 1px solid #57d8cd;
            border-radius: 50px;
            backdrop-filter: blurd(50%);
            box-shadow: 5px 10px 20px rgba(0,0,0,0.6);
        }
    </style>
<main id="main" class="main">
<div class="pagetitle">
      <h1>Subsystems</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.php">Home</a></li>
          <li class="breadcrumb-item active">Subsystems</li>
        </ol>
      </nav>
    </div>
    <!-- End Page Title -->

    <!-- Start Section page -->
    <section class="section">
        <div class="row justify-content-center" id="row">
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="col"><br>HUMAN RESOURCE 1<br><br><br><br><a href="">Click to enter</a></div>    
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="col"><br>HUMAN RESOURCE 2<br><br><br><br><a href="">Click to enter</a></div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="col"><br>CORE 1<br><br><br><br><a href="">Click to enter</a></div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="col"><br>CORE 2<br><br><br><br><a href="">Click to enter</a></div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="col"><br>CORE 3<br><br><br><br><a href="">Click to enter</a></div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="col"><br>LOGISTICS 1<br><br><br><br><a href="">Click to enter</a></div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="col"><br>LOGISTICS 2<br><br><br><br><a href="">Click to enter</a></div>
            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3" id="col"><br>FINANCIALS<br><br><br><br><a href="">Click to enter</a></div>
        </div>
    </section>

<?php
  include 'footer.php';
?>