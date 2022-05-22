<?php 
require dirname(__FILE__).'/../config/route.php'; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Project</title>
	<link rel="stylesheet" type="text/css" href="<?php echo url.'assets/css/mystyle.css'; ?>">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link
  		rel="stylesheet"
  		href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
	/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<!-- Top-header section -->
<header class="header">
    <div class="header-tops">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-7">
            <ul style="float: left;" class="ml-5 t-con">
              <li style="padding-left:0px;"><a href="tel:097210 56160" style="color:#ff8d2b"><i class="fa fa-phone"></i> +91 097210 56160</a></li>
              <li id="add"><a href="mailto:rudrasupport@gyaannirudra.com" class="border-0" style="color:#ff8d2b"><i class="fa fa-envelope"></i>rudrasupport@gyaannirudra.com</a></li>
            </ul>
          </div>
          <div class="col-md-5">
            <ul id="login_register">
              <li id="login"><a href="<?php echo url.'views/signup.php'; ?>" class="border-0">Login/Register</a></li>
            </ul>
          </div>          
        </div>
      </div>
    </div>
    <div class="header-main">
      <div class="top-left">
        <a href="#">
        	<img src="<?php echo url.'assets/images/logo_specss.png' ?>" class="img-fluid mx-auto d-block">
        	<span>Specss</span>
        </a>
      </div>
      <div class="open-nav-menu">
        <span></span>
      </div>
      <div class="menu-overlay">
      </div>
      <!-- navigation menu start  -->
      <nav class="nav-menu">
        <div class="close-nav-menu">
          <img src="images/close.svg" alt="close">
        </div>
        <ul class="menu">
          <li class="menu-item">
            <a href="<?php echo url; ?>">Home</a>
          </li>
          <li class="menu-item menu-item-has-children">
            <a href="xyz.html" data-toggle="sub-menu">About <i class="plus"></i></a>
          </li>
          <li class="menu-item">
            <a href="gallery">Gallery</a>
          </li>
          <li class="menu-item">
            <a href="<?php echo url.'views/courses.php' ?>">Courses</a>
          </li>
          <li class="menu-item">
            <a href="<?php echo url.'views/contact.php'; ?>">Contact</a>
          </li>
        </ul>
      </nav>
    </div>  
</header>
<!--  -->
