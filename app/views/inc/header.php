<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!-- FONTS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <!-- <link href="https://fonts.googleapis.com/css2?family=Courgette&family=Lobster&family=Zen+Dots&display=swap" rel="stylesheet"> -->
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Courgette&family=Lobster&family=Poppins:wght@400;500&family=Prosto+One&family=Zen+Dots&display=swap" rel="stylesheet">
  <!-- ICONS -->
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
  <script src="https://kit.fontawesome.com/58c375ca00.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="<?php echo URLROOT; ?>/css/style.css">

  <title><?php echo SITENAME; ?></title>
  <style>
    table tr td:last-child,
    table tr th:last-child {
      display: flex !important;
      flex-wrap: wrap !important;
      justify-content: center !important;
    }
  </style>

</head>

<body style="background-color: #FFFAFA;   box-sizing: border-box;
    padding: 0 !important;
    margin: 0 !important;">
  <?php require APPROOT . '/views/inc/navbar.php'; ?>