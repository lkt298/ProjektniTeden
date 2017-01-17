<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Postavi.SI </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="default.css"/>
</head>
<body>
<!-- START PAGE SOURCE -->
<div id="container">
<form class="form" action="login_check.php" method="post" onsubmit="return formCheck(this)">
<b>
<h4 align="center"></h4> </b>
   <div class="input-group">
       <label>Email</label>
       <input class="form-control" type="text" name="email" />
   </div>
    <div class="input-group">
       <label>Password</label>
        <input class="form-control" type="password" name="pass" onkeypress="skrij()" /><span id="error"></span>
   </div>
    <div class="input-group">
        <input class="btn btn-primary" type="submit" name="submit" value="Login" />
    </div>
</form>
  <div id="header"> <a href="#"><img src="images/logo.gif" alt="" class="logo"/></a>





    <ul id="toplinks">
    </ul>
  </div>
  <div id="nav">
    <ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="hosting.php">Hosting</a></li>
      <li><a href="contact.php">Contact Us</a></li>
      <li><a href="about.php">About Us</a></li>
    </ul>
    <ul class="right">
      <li><a href="#"><strong>Order Now</strong></a></li>
      <li><a href="#">View Basket</a></li>
    </ul>
  </div>
  </div>
  </body>
  </html>