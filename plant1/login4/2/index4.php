
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>hotels</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Catamaran:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template -->
   <!-- <link href="css/one-page-wonder.min.css" rel="stylesheet">
//cancel the head img 
  </head>

  <body>

    <!-- Navigation -->

<body>
<img src="img/bg/bg2.jpg" alt="Nature" class="responsive">


<li>
  


</li>

  <center> <h1>Tourist Hotels are Available </h1></center>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
        

				<?php 
				session_start();	


				 ?>

              <?php
				if (isset($_SESSION['u_id'])) {
					echo '<form action="../includes/logout.inc.php" method="POST">
				  		<button type="submit" name="submit">Logout</button>
				  			</form>';
				}

				  ?>




            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header class="masthead text-center text-white">
      <div class="masthead-content">
        <div class="container">
          <h1 class="masthead-heading mb-0">One Page Wonder</h1>
          <h2 class="masthead-subheading mb-0">Will Rock Your Socks Off</h2>
          
        </div>
      </div>
      <div class="bg-circle-1 bg-circle"></div>
      <div class="bg-circle-2 bg-circle"></div>
      <div class="bg-circle-3 bg-circle"></div>
      <div class="bg-circle-4 bg-circle"></div>
    </header>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img/9.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <h2 class="display-4">Amagi Lagoon Resort And Spa</h2>
              <p>  Category    Hotels<br>
                    22 Rooms<br>
                    640/82, Colombo Road, Kurana, Negambo<br>
                    Website: <a href="https://www.amagiresort.com.com">www.amagiresort.com</a>
                    Email:gfc@amagihotels.com<br>
                    Tel:0312238385<br>

              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img/10.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="p-5">
              <h2 class="display-4">Amaloh By Jetwing</h2>
              <p>
              Category:Hotels<br>
              21 Rooms<br>
             No. 39/6, 1st Cross Road, Polhena, Matara.<br>
       Website: <a href="https://www.amaloh.com.com">www.amaloh.com</a><br>
              Email:sanjeewa.p@jetwinghotels.com<br>
              Tel:0412230088</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 order-lg-2">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img/11.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <h2 class="display-4">Amaranthe Bay Resorts & Spa</h2>
              <p>
                Category:Hotels<br>
                27 Rooms<br>
              No. 101, Alles Garden Road, Uppuveli, Trincomalee.<br>
                Website: <a href="https://www.www.amaranthebay.com">www.amaranthebay.com</a><br>
                Email:ga@amaranthebay.com<br>
                Tel:0262050200</p>
            </div>
          </div>
        </div>
      </div>
    </section>


     <section>
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div class="p-5">
              <img class="img-fluid rounded-circle" src="img/12.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="p-5">
              <h2 class="display-4">Amaara Sky Hotel</h2>
              <p>
              Category:Hotels<br>
               12 Rooms<br>
              72/22, A. B. Damunupola Mawatha, Kandy<br>
       Website: <a href="http://www.amaarasky.com">www.amaarasky.com</a><br>
              Email:srithurshijoyel@gmail.com<br>
              Tel:0812228813</p>
            </div>
          </div>
        </div>
      </div>     
    </section>








<nav aria-label="Page navigation">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
     <li class="page-item "><a class="page-link" href="index2.php">Previous</a></li>
    </li>
    <li class="page-item active"><a class="page-link" href="index4.php">4</a></li>
    <li class="page-item ">
      <span class="page-link" href ="#">
        5
        <span class="sr-only">(current)</span>
      </span>
    </li>
    <li class="page-item disabled"><a class="page-link" href="#">6</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>


    <!-- Footer -->
    <footer class="py-5 bg-black">
      <div class="container">
        <p class="m-0 text-center text-white small">Copyright &copy; Your Website 2018</p>
      </div>
      <!-- /.container -->
    </footer>



    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>