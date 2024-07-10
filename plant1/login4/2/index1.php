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
<img src="img/bg/banner1.jpg" alt="Nature" class="responsive">


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
              <img class="img-fluid rounded-circle" src="img/5.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <h2 class="display-4">Aida Hotel-induruwa</h2>
              <p>  Category    Hotels<br>
                    10 Rooms<br>
                    No. 798, Galle Road, Yalegama, Induruwa<br>
                    Email:aida@visual.lk<br>
                    Tel:0342272759<br>

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
              <img class="img-fluid rounded-circle" src="img/6.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="p-5">
              <h2 class="display-4">Alpine Hotel</h2>
              <p>
              Category:Hotels<br>
              25 Rooms<br>
              No. 4 , Haddon Hill Road, Nuwaraeliya<br>
       Website: <a href="https://www.
alpineecotravels.com">www.
alpineecotravels.com</a><br>
              Email:manjulaudagadara@gmail.com<br>
              Tel:0522223500</p>
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
              <img class="img-fluid rounded-circle" src="img/7.jpg" alt="">
            </div>
          </div>
          <div class="col-lg-6 order-lg-1">
            <div class="p-5">
              <h2 class="display-4">Amaara Forest Hotel</h2>
              <p>
                Category:Hotels<br>
                40 Rooms<br>
                No:115, Indigaswewa, Sigiriya.<br>
                Website: <a href="https://www.amaaraforest.com">www.amaaraforest.com</a><br>
                Email:antonhallock1@gmail.com<br>
                Tel:0662277277</p>
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
              <img class="img-fluid rounded-circle" src="img/8.jpg" alt="">
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
     <li class="page-item"><a class="page-link" href="index.php">Previous</a></li>
    </li>
    <li class="page-item"><a class="page-link" href="index.php">1</a></li>
    <li class="page-item active">
      <span class="page-link">
        2
        <span class="sr-only">(current)</span>
      </span>
    </li>
    <li class="page-item"><a class="page-link" href="index2.php">3</a></li>
    <li class="page-item">
      <a class="page-link" href="index2.php">Next</a>
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