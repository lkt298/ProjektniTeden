!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
include_once 'base.php';
include_once 'session.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<<<<<<< HEAD
<title>Registracija</title>
=======
<title>Postavi.si</title>
>>>>>>> code
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Konnect Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!-- webfonts -->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<!-- webfonts -->
<!-- dropdown -->
<script src="js/jquery.easydropdown.js"></script>
<!-- Add fancyBox main JS and CSS files -->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="css/popup.css" rel="stylesheet" type="text/css">
        <script>
            $(document).ready(function() {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',
                    fixedContentPos: false,
                    fixedBgPos: true,
                    overflowY: 'auto',
                    closeBtnInside: true,
                    preloader: false,
                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
            });
        });
        </script>
</head>
<body>
<div class="header">
    <div class="header_top">
        <div class="container">
             <div class="col-sm-6 header-top-left">
              <div class="box">
               </div>
               <div class="box1">
               </div>
               <div class="clearfix"></div>
             </div>
             <div class="col-sm-6 header-top-right">
                <div class="col-xs-7 phone"><p></p></div>
                <div class="col-xs-5 check_box">
                    <a href="#"> <ul class="check">
                        <i class="cart"> </i>
                        <li class="cart_desc">Košarica</li>
                        <div class="clearfix"> </div>
                    </ul></a>
                </div>
                <div class="clearfix"></div>  
             </div>
            <div class="clearfix"></div>
       </div>
    </div>
    <div class="container">
      <div class="header_bottom"> 
       <div class="col-xs-3 logo">
         <a href="index.php"><img src="images/logo.png" alt=""/></a>
       </div>
       <div class="col-xs-9 header_nav">
           <div class="col-xs-9 menu">
                    <a class="toggleMenu" href="#"><img src="images/nav_icon.png" alt="" /> </a>
                    <ul class="nav" id="nav">
                      <li class="current"><a href="index.php">Domov</a></li>
                      <li><a href="about.php">Zakaj Postavi.si</a></li>
                      <li><a href="services.php">Ponujamo</a></li>                                
                    </ul>
                    <script type="text/javascript" src="js/responsive-nav.js"></script>
          </div>
          
          <div class="clearfix"></div>        
      </div>
      <div class="clearfix"></div>
      </div>

      <div class="contact_index">
  <div class="container">
    <div class="col-md-8 contact_index-left">
      <h3>Vnesi svoje podatke</h3>
      <div class="contact-form">
        <form action="register.php" method="POST">
        <h3>Ime</h3>
          <input type="text" placeholder="test" name="name" class="textbox"  required="required">
          <h3>Priimek</h3>
          <input type="text" name="surname" class="textbox" required="required">
          <h3>E-naslov</h3>
          <input type="text" name="email" class="textbox" required="required">
          <h3>Uporabniško ime</h3>
          <input type="text" name="username" class="textbox" required="required">
          <h3>Geslo</h3>
          <input type="password" name="password" class="textbox" required="required">
          <br>
          <br>
          <input type="submit" value="Pošlji">
        </form>
      </div>
    </div>
   </div>
   </div>
