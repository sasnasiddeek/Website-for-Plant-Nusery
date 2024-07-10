<?php 

    


?>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.png">
    <title>Wish A Sprinkle</title>
    
    <!--Template based on URL below-->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Place your stylesheet here-->
    <link href="/css/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>

<?php include("ProductNav.php");?>
    

    <main role="main" class="container"><br><br><br><br>
       
        <div class="row">
            <div class="col-xl-12 col-lg-12 h3 text-center  ">MAKE A WISH  </div>
            <div class="col-xl-12 col-lg-12 text-center    m-1">  <hr class="bg-danger w-25"> </div>
            <div class="col-xl-12 col-lg-12 text-danger text-center"> WISHES COME TRUE</div>
        </div>
         <div class="row">
        <?php
            
        
            $sql="SELECT * FROM product WHERE product_category = 'Birthdy_Cakes'";
            if($result=mysqli_query($db,$sql)){
                 while ($row=mysqli_fetch_array($result))
               {
 
         
        
        
        ?>

    <div class="col-xl-4 col-lg-4 p-4  ">
        <div class="card-deck">
          <div class="card">
            <img class="card-img-top" src="<?php  echo $row["product_image"];?>" alt="Card image cap"width="50" height="350">
            <div class="card-body">
                <h5 class="card-title"><center><?php echo $row["product_name"]; ?></center></h5>
                <div class="col-xl-12 col-lg-12 text-center    m-1">  <hr class="bg-danger w-75"> </div>
                <h5 class="card-title"><p class="text-danger h3"><center>Rs <?php echo $row["product_price"];   ?>/= </center></p></h5>
                <p class="card-text"><center><?php echo $row["product_desc"];   ?> </center></p>
                <p class="card-text"><small class="text-muted"><center><a href="productsDetails.php?id=<?php echo $row["id"]?>" class="btn btn-primary">View Description</a></center></small></p>
            </div>
          </div> 
          
        </div>
    </div>

           
            <?php
                
                }
            }
        
            ?>

        </div> 

    </main><!-- /.container -->


    
    
    
    
      <?php include("footer.php");?>
    
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>