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
<link rel="stylesheet" href="css/Home.css">


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
        
        <a class="nav-link" href="#"><i class="fa fa-home"></i>Home </a>
        
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
        <a class="nav-link" href="login3/login.php"><i class="fa fa-user"></i>Admin </a>
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
<!------Slider------>
<div id="slider">
<div id= "headerSlider" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#headerSlider" data-slide-to="0" class="active"></li>
    <li data-target="#headerSlider" data-slide-to="1"></li>
    <li data-target="#headerSlider" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/p.jpg" class="d-block img-fluid" >
         <div class="carousel-caption">
            <h5>Flower Plants</h5>
          </div>
    </div>
    <div class="carousel-item">
      <img src="img/p1.jpg" class="d-block img-fluid" >
          <div class="carousel-caption">
            <h5>Fruits Plants</h5>
          </div>
    </div>
    <div class="carousel-item">
      <img src="img/p2.jpg" class="d-block img-fluid">
          <div class="carousel-caption">
            <h5>Vegitable Plants</h5>
          </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#headerSlider" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#headerSlider" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="..." alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="..." alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>-->

</div>
          <!------About------->
<section id="about">
<div class="container">
<div class="row">
<div class="col-mod-6">
<h2>About US</h2>
    <div class="about-content">
    “ Lakpriya  Flora” plant Nursury  interduse verity of  flowers, vegitable, fruits plants. Different model  flower pots, Different fertilizers and different flowers, vegitable and fruits seeds. what you want visit our website and select our service and order it online. If you want to beautiful   garden we provide that service too. You want natural flowers for wedding, funeral and other special ocasion in your  life  we will  provide natural flowers. For those of you who are busy you can visit our website and order from in your home. If you order any of  this we’ll deliver. Delivery is free if you order more than 500 plants. Plant nursery location and site map will be provide too.24hrs online call service is an additional service. The best support to make all our customers 100% satisfied by using our service. 
    </div>
        <button type="button" class="btn btn-perimary">Read more>>
        </button>
</div>
</div>
</div>
</section>
      <!------Services------>
      <section id="service">
           <div class="container">
                <h1>Our Service</h1>
                <div class="row">
                  <div class="col-md-3 text-center">
                    <div class="icon">
                      <i class="fa fa-leaf"></i>
                    </div>
                    <h3>Flower Plants</h3>
                    <p>Flowers are the reproductive parts of flowering plants.Flowers are also called the bloom or blossom of a plant. Flowers have petals. Inside the part of the flower that has petals are the parts which produce pollen and seeds.  </p>
                  </div>
                  <div class="col-md-3 text-center">
                    <div class="icon">
                      <i class="fa fa-pagelines"></i>
                    </div>
                    <h3>Fruit Plants</h3>
                    <p>In botany, a fruit is the seed-bearing structure in flowering plants (also known as angiosperms) formed from the ovary after flowering. Fruits are the means by which angiosperms disseminate seeds. </p>
                  </div>
                  <div class="col-md-3 text-center">
                     <div class="icon">
                     <i class="fa fa-leaf"></i>
                 </div>
                <h3>Vegitables Plants</h3>
                <p>A vegetable is the edible portion of a plant. Vegetables are usually grouped according to the portion of the plant that is eaten such as leaves (lettuce), stem (celery), roots (carrot), tubers (potato), bulbs (onion) and flowers (broccoli).So a tomato is botanically a fruit but is commonly considered a vegetable   </p>
              </div>
              <!-- <div class="col-md-3 text-center">
                  <div class="icon">
                   <i class="fa fa-pagelines"></i>
                 </div>
                <h3>Pots</h3>
                <p>For those of you who are busy you can visit our website and order from in your home. If you order any of  this we’ll deliver. Delivery is free if you order more than 500 plants. Plant nursery location and site map will be provide too.24hrs online call service is an additional service. The best support to make all our customers 100% satisfied by using our service.  </p>
              </div>

              <div class="row text-center ">
                <div col-md-12="margin:0 auto text-center ">
                <div class="col-md-3 text-center">
                 <div class="icon">
                   <i class="fa fa-leaf"></i>
                 </div>
                <h3>Seads</h3>
                <p>For those of you who are busy you can visit our website and order from in your home. If you order any of  this we’ll deliver. Delivery is free if you order more than 500 plants. Plant nursery location and site map will be provide too.24hrs online call service is an additional service. The best support to make all our customers 100% satisfied by using our service.  </p>
              </div>---->
              </div>
            </div>
          </div>
         </section>
         <!------promo------>
         <section id="promo">
         <div class="container">
             <p>Free Dilivery</p>p>
             <a href="#" class="btn  btn-primary">Contact Us</a>
<!--<script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>-->

</body>
</html>



