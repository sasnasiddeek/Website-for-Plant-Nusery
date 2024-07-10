<?php

session_start();
if(isset($_GET['i']))
{
  session_destroy();
}




$v1=0;

if(isset($_SESSION['i']))
{
  $v1=1;
}



?>

<!doctype html>
<html lang="en">
  <head>
 <meta charset="utf-8">
<titel></title>
	<meta chartset="UTF-8">
	<link rel="stylesheet" href="bootstrap-4.4.1-dist/css/bootstrap.min.css">
  
	
  <link rel="stylesheet" type="text/css" href="font_awesome/fontawesome-free-5.11.2-web/css/all.css">


<link rel="stylesheet" href="css/bootstrap.css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/header.css">


<script src="js/jquery-3.4.1.slim.min.js" ></script>
<script src="js/bootstrap.min.js" ></script>
<script src="js/popper.min.js"></script>
</head>
<body>
<!-----Navigation----->
<section id="nav-bar">
<nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="#"><img src="img/p10.png"</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item ">
        
        <a class="nav-link" href="index.php"><i class="fa fa-home"></i>Home </a>
        
      </li>
      <li class="nav-item">
        <a class="nav-link" href="aboutus.php"><i class="fa fa-user"></i></i>About Us </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="orderadd.php"><i class="fa fa-clone"></i>Make Order </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index1.php"><i class="fa fa-clone"></i>Items </a>
       <!-- <div class="nav-content">
          <div class="nav-sub">
              <ul>
                <li><a href="#"> Fruit Plants</a></li>
                <li><a href="#">Vegetable Plants</a></li>
                <li><a href="#">Flower Plants </a></li>
                <li><a href="#">Pots</a></li>
                 <li><a href="#">Fertilizers</a></li>
              </ul>
            </div>
          </div>--->
      </li>
      <li class="nav-item">
        <a class="nav-link " href="login3/login.php"><i class="fa fa-user"></i>Admin </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php"><i class="fa fa-phone"></i>Contact Us </a>
      </li>

      <?php

                                    if(isset($_SESSION['u_uid']))
                                    {
                                    ?>
                                    <li class="nav-item">
                                      <a class="nav-link" href="index.php?i=0"><i class="fa fa-sign-out"></i>logout</a></li>
                                      <?php 
                                    ?>
                                    <li class="nav-item">
                                      <a class="nav-link" href="login2/update.php"><i class="fa fa-user"></i>
                                      <?php
                                      echo $_SESSION['u_uid'];                                    
                                      ?>
                                    </a></li>
                                    
                                      <?php
                                    }
                                      else
                                      {
                                      ?>
                                    <li class="nav-item">
                                      <a class="nav-link" href="login2/signup.php"><i class="fa fa-sign-in"></i>login</a></div>
                                      <?php
                                        }
                    ?>


    </ul>
  </div>
</nav>
</section>