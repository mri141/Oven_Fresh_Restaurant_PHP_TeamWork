<!doctype html>

 <html class="no-js" lang=""> 

<head>
<meta charset="utf-8">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Oven fresh Restaurant </title>
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="css/main.css">
<link rel="stylesheet" href="css/responsive.css">
<link rel="stylesheet" href="css/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
</head>

<body>


<?php 
include'menu.php';

?>

<section id="contact" class="section services">
  <div class="">
 


<html>
<head>
	<title>login</title>
</head>
<body>
	<div class="header">
		<!DOCTYPE HTML>
<html>
<head>
    
	<h3 align="center">Sign In</h3>
</head>
<body>
    <div class="container">
        <div class="card card-container">
          <p id="profile-name" class="profile-name-card"></p>
            <form class="form-signin" action="" method="POST">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
                <br>
                <button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="login">Sign in</button>
            </form>
        </div>
    </div>
</body>
</html>
<?php
include "db_con.php";
IF(ISSET($_POST['login'])){
$email = $_POST['email'];
$password = $_POST['password'];
$cek = mysql_num_rows(mysql_query("SELECT * FROM user_login WHERE email='$email' AND password='$password'"));
$data = mysql_fetch_array(mysql_query("SELECT * FROM user_login WHERE email='$email' AND password='$password'"));
IF($cek > 0)
{
 session_start();
 $_SESSION['email'] = $data['email'];
 $_SESSION['name'] = $data['full_name'];
 echo "<script language=\"javascript\">alert(\"welcome \");document.location.href='foodgallery.php';</script>";
}else{
 echo "<script language=\"javascript\">alert(\"Invalid username or password\");document.location.href='login.php';</script>";
}
}
?>
	</form>
</body>
</html>
	</section>
    </div>
  </div>
</section>

<footer id="contact" class="footer">
  <div class="container-fluid">
    <div class="col-md-3 left">
      <h4>Office Location</h4>
      <p> House# 1,Road# 01, A Block, Mirpur</p>
    </div>
    <div class="col-md-3 left">
      <h4>Contact</h4>
      <p> Call: 0123456789 <br>
        Email : <a href="mailto:hello@agency.com"> xyz@gmail.com </a></p>
    </div>
    <div class="col-md-3 left">
      <h4>Social Network</h4>
      <ul class="footer-share">
        <li><a href="http:/www.facebook.com"><i class="fa fa-facebook"></i></a></li>
        <li><a href="http:/www.twitter.com"><i class="fa fa-twitter"></i></a></li>
        <li><a href="http:/www.linkedin.com"><i class="fa fa-linkedin"></i></a></li>
        <li><a href="http:/www.google.com"><i class="fa fa-google-plus"></i></a></li>
      </ul>
    </div>
    <div class="col-md-3 right">
      <p>© 2017, All rights reserved Rashed & Afroza. <br>
        
    </div>
  </div>
</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flexslider-min.js"></script> 
<script src="js/retina.min.js"></script> 
<script src="js/modernizr.js"></script> 
<script src="js/main.js"></script>
</body>
</html>