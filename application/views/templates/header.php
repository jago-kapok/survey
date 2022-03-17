<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title><?php echo $title ?></title>
  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <!-- Font-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="<?= base_url('assets/'); ?>dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  <script src="<?= base_url('assets/'); ?>dist/js/jquery-3.6.0.min.js"></script>
  <script src="<?= base_url('assets/'); ?>dist/js/jquery-chained.min.js"></script>
  <script src="<?= base_url('assets/'); ?>dist/js/notify.min.js"></script>
  <script src="<?= base_url('assets/'); ?>dist/js/sweetalert2@11.js"></script>

  <!-- AOS -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>dist/css/aos.css" />

  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>plugins/datatables-bs4/css/dataTables.bootstrap4.css">

  <!-- Charts -->
  <script src="<?= base_url('assets/'); ?>dist/js/apexcharts.js"></script>

  <style>
    body { font-family: 'Inter', sans-serif; background-color: #eff3f8; font-size: 85%; }
    .card { padding: 1rem; border-radius: 12px; box-shadow: 0 3px 5px rgba(0,0,0,.02),0 0 2px rgba(0,0,0,.05),0 1px 4px rgba(0,0,0,.08)!important; }
    .nav-fill .nav-item, .nav-fill>.nav-link { border-radius: 12px; width:10.3rem; }
    .btn { font-size: 0.9rem; font-weight: bold }
    .btn.btn-success { background-color: #22c55e; border: 1px solid #22C55E }
    .modal { z-index: 1050 !important }
    .list-group { border-radius: 12px; text-align: center; font-weight: bold }
    .dataTables_filter { display: none }
    tbody, td, tfoot, th, thead, tr { vertical-align: middle }
    .navbar-light {
      position: fixed;
      z-index: 997;
      top: 0;
      left: 0;
      width: 100%;
      padding: 0.7rem 2rem;
      background-color: #FFFFFF;
      transition: left .2s;
      box-shadow: 0 3px 5px rgb(0 0 0 / 2%), 0 0 2px rgb(0 0 0 / 5%), 0 1px 4px rgb(0 0 0 / 8%);
    }
    .nav-icon { color: #4a4b4c; font-size: 1.5rem; }
    .card-icon { width:2.5rem; height:2.5rem; border-radius: 6px; font-size: 1.2rem; font-weight: bold; padding: 0.2rem; }
  </style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
      <a class="navbar-brand" href="<?= base_url() ?>"><b>SURVEY DTKS</b></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item ms-4">
            <a href="<?= base_url() ?>" class="nav-link active" aria-current="page">Beranda</a>
          </li>
          <li class="nav-item ms-4">
            <a href="<?= base_url() ?>input/quest/1/a2ErZWkvZXcvZTcyei9YUyt5b0RrZz09" class="nav-link active" aria-current="page">Pengisian Survey</a>
          </li>
        </ul>
        <form class="d-flex">
          <div class="dropdown">
            <a href="javascript:void(0)" class="nav-icon dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="text-decoration: none">
              <i class="bi-person-circle"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton1">
              <li><h6 class="dropdown-header">Menu Pengguna</h6></li>
              <li><a class="dropdown-item" href="#"><i class="bi-person"></i>&nbsp;&nbsp;Profile</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="<?php base_url() ?>auth/logout"><i class="bi-box-arrow-right"></i>&nbsp;&nbsp;Keluar</a></li>
            </ul>
          </div>
        </form>
      </div>
    </div>
  </nav>

  <div class="container-fluid p-4 mt-5">
    <div class="row mt-2">