<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>DAMISDA - Kab. Bojonegoro</title>
  <!-- Mobile Specific Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <link rel="icon" type="image/x-icon" href="<?= base_url('assets/') ?>dist/img/logo.png">

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
    .side-b { color: dodgerblue; }
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
  <div class="container-fluid p-4 mt-5">
    <div class="row mt-2">