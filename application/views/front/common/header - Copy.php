<!DOCTYPE html>
<html lang="en">
	<?php 

$logo = $this->FrontM->get_setting("logo");
 $favicon = $this->FrontM->get_setting("favicon");
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ROCTOPUS</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/assets/front/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="/assets/front/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/assets/front/dist/css/adminlte.min.css">
  <!-- Extra CSS -->
  <link rel="stylesheet" type="text/css" href="/assets/front/css/extracss.css">

  <!-- Google Icons-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">


</head>
<body>
<div class="container-fluid px-0 navpos">
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand" href="<?=base_url()?>">
      <img src="/assets/front/dist/img/<?=$logo?>" class="img-fluid" width="100">
    </a>
    <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end navbg" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white txtcolr1" href="<?=base_url()?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white txtcolr1" href="<?=base_url()?>Front/products">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white txtcolr1" href="#about">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white txtcolr1" href="<?=base_url()?>Front/news">News</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white txtcolr1" href="#contact-us">Contact Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white txtcolr1" href="<?=base_url()?>Front/faqs">FAQ</a>
        </li>
      </ul>
    </div>
  </nav>
</div>


 