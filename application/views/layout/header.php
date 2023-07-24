<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Bagian CSS Bootstrap -->
  <link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.css'); ?>">

  <title><?= $title; ?></title>
  <style>
    body {
      background-color: #eee;
      height: 1000px;
    }

    /* div {
      border: 1px solid red;
    } */

    .btn-add {
      position: fixed;
      bottom: 30px;
      right: 30px;
    }

    .offcanvas.offcanvas-bottom {
      height: 45vh;
    }
  </style>
</head>

<body>

  <!-- Start Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
    <div class="container">
      <div class="navbar-brand m-auto">
        <a class="navbar-brand fw-bold" href="#">BALANJO</a>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->