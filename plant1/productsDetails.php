<?php
    $id=$_GET["id"]; 
    include("dbconnection.php");
    session_start();
    $Mem = $_SESSION["Email"] ;
                       if(!isset($_SESSION["Email"])){
        header("location:login.php");
        }
else{
                    
         $link = mysqli_connect("localhost","root","");
          mysqli_select_db($link,"lsapp");
          $date=date("Fj,Y");
    


            $res=mysqli_query($link,"select * from product where id=$id");
                  while($row=mysqli_fetch_array($res))
                  {
                          $rowid =$row["id"];
                          $rowpname=$row["product_name"];
                          $rowpimage=$row["product_image"];
                          $rowpprice=$row["product_price"];
                      
                       $_SESSION['ProductName']=$rowpname;
                       $_SESSION['ProductPrice']=$rowpprice;
                       $_SESSION['ProductID']=$rowid;
                       $_SESSION['product_image']=$rowpimage; 
                  }
              
                  $PID = $_SESSION["ProductID"] ;
                  $PName = $_SESSION["ProductName"] ;
                  $PPrice = $_SESSION["ProductPrice"] ;
                    $PImage = $_SESSION["product_image"] ;



              if(isset($_POST['AddBtn'])){
                    $Qty=$_POST['qty'];
                    $User = $Mem;
                    $Price = $PPrice;
                 
                  

                   $sqlinsert = "insert into cart (User,Qty,Name,Price) values ('$User','$Qty','$PName','$Price')";
            mysqli_query($db,$sqlinsert) ;

             header("Location:BirthdayCakes.php");   
            } 
     if(isset ($_POST['FeedbackBtn'])){
                            $feedback=$_POST['feedback'];
                            $sqlfeeedback="insert into feedback (FeedBack, User, ProductID) value ('$feedback','$Mem','$PID')";
                            mysqli_query($db,$sqlfeeedback) ;
         
    
         header("Location:BirthdayCakes.php");   
     }
      
    
}
                         

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
 
<nav class="navbar navbar-expand-md navbar-dark bg-dark  fixed-top">
    <div class="container">
         <div class="logo"><a href="#"><img src="images/img/logo/Xoxo.png"></a></div>
        <link href="https://fonts.googleapis.com/css?family=Great+Vibes|Roboto" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Cookie|Great+Vibes|Handlee|Lobster|Roboto" rel="stylesheet">
        
   <a class="navbar-brand" href="index.php" style="font-family: 'Great Vibes', cursive;">Wish A Sprinkle</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse col-xl-6" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php" style="font-family: 'Lobster', cursive;">Home <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family: 'Lobster', cursive;">Occasion</a>
                <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="BirthdayCakes.php" style="font-family: 'Lobster', cursive;">Birthday Cakes</a>
                    <a class="dropdown-item" href="Seasanol_Greetings.php" style="font-family: 'Lobster', cursive;">Seasonal Greeing Cakes</a>
                    <a class="dropdown-item" href="Thank_you.php" style="font-family: 'Lobster', cursive;">Thank You Cakes</a>
                    <a class="dropdown-item" href="Anniversary.php" style="font-family: 'Lobster', cursive;">Anniversary Cakes</a>
                    <a class="dropdown-item" href="get_well_soon.php" style="font-family: 'Lobster', cursive;">Get Well Soon Cakes</a>
                    <a class="dropdown-item" href="congragulation.php" style="font-family: 'Lobster', cursive;">Congragulation Cakes</a>
                    <a class="dropdown-item" href="sorry.php" style="font-family: 'Lobster', cursive;">Sorry Cakes</a>
                    <a class="dropdown-item" href="love.php" style="font-family: 'Lobster', cursive;">Loves Cakes</a>
                    <a class="dropdown-item" href="Thinking_of_you.php" style="font-family: 'Lobster', cursive;">Thinking Of You Cakes</a>
                    <a class="dropdown-item" href="Best_Wishes.php" style="font-family: 'Lobster', cursive;">Best Wishes Cake</a>
                    <a class="dropdown-item" href="sympathy.php" style="font-family: 'Lobster', cursive;">Sympathy Cakes</a>
                </div>
             <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-family: 'Lobster', cursive;">Account</a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="signup.php" style="font-family: 'Lobster', cursive;">Sign Up</a>
                        <a class="dropdown-item" href="login.php" style="font-family: 'Lobster', cursive;">Login</a>
                        <a class="dropdown-item" href="logout.php" style="font-family: 'Lobster', cursive;">Logout</a>
                        <div class="dropdown-divider"></div>    
                    </div>
                </li>
            
              <li class="nav-item active">
                <a class="nav-link" href="#CARTModel" data-toggle="modal" data-target="#exampleModal" style="font-family: 'Lobster', cursive;">Cart   </a>
            </li>
             
        </ul>
        </div>
    </div>
</nav>

    
        
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Your Cart</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                 <table class="table">
                    
                  <thead>
                    <tr>
                      <th scope="col">ID</th>
                      <th scope="col">Name</th>
                      <th scope="col">QTY</th>
                      <th scope="col">Price</th>
                        
                      <th scope="col">Remove</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                         
                        if(!isset($_SESSION["Email"])){
                            echo 'You have to login for add items in your cart <a href="login.php">Click To Login</a> ';
                            }
                      else{
                            include("dbconnection.php");

                  
                       $Mem = $_SESSION["Email"] ;
                          $SessionMail=$Mem;
                          
                          echo  $SessionMail;
                       
                     
                     $sqlcart="SELECT * FROM cart  where User='".$SessionMail."'";
                            if($resultcart=mysqli_query($db,$sqlcart)){
                                 while ($rowcart=mysqli_fetch_array($resultcart))
                               {
                                    
                                        
                     
                     
                     ?>
                    <tr>
                      <th scope="row"><?php  echo $rowcart["ID"].' ';?></th>
                      <td><?php  echo $rowcart["Name"].' ';?></td>
                      <td><input type="number" class="form-control  " min="1" id="inputAddress2" value="<?php  echo $rowcart["Qty"];?>"></td>
                      <td>Rs. <?php  echo $rowcart["Price"].' ';?></td>
                        
                      <td><a href="PDRemove.php?id=<?php echo $rowcart["ID"]?>">Remove</a></td>
                    </tr>
                    
                  </tbody>
                     <?php
                         }
                            }
                      }
                     ?>
                </table>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <a href="checkout.php" class="btn btn-primary">Check Out</a>
              </div>
            </div>
          </div>
        </div>
        
        
        
        
    
    <br> <br><br><br>
    <div class="row">
            <div class="col-xl-12 col-lg-12 mt-2 pt-2 pb-2 pl-5 pr-5 ">
             <div class="alert alert-warning alert-dismissible fade show" role="alert">
                 <div class="row">
                 <div class="col-xl-6 col-lg-6   mt-2 pt-2 pb-2 pl-5 pr-5 "><strong>Welcome</strong> <?php echo $Mem;?></div>
                 <div class="col-xl-6 col-lg-6 text-right alert-warning   mt-2 pt-2 pb-2 pl-5 pr-5 ">
                     
               
                     <a   href="logout.php">Logout</a>
                     </div>
                 </div>
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
            </div>  
        </div>
    
   
    

    <main role="main" class="container"><br><br><br><br>
        <div class="row">
            <div class="col-xl-12 col-lg-12 h3 text-center  ">MAKE A WISH  </div>
            <div class="col-xl-12 col-lg-12 text-center    m-1">  <hr class="bg-danger w-25"> </div>
            <div class="col-xl-12 col-lg-12 text-danger mb-3 text-center"> WISHES COME TRUE</div>
        </div>
        
        
          <?php
          
            $sql="select * from product where id=$id";
            if($result=mysqli_query($db,$sql)){
                 while ($row=mysqli_fetch_array($result))
               {
   
        ?>
        
        
        <form method="post" action="productsDetails.php">
         <div class="row mb-5">
            <div class="col-xl-6 col-lg-6  text-center  ">
                <img src="<?php  echo $row["product_image"];?>" width="450" height="450">
             
            </div>
            <div class="col-xl-6 col-lg-6 text-center  6">   
                <div class="row">
                    <div class="col-xl-12 col-lg-12  mt-3 h1 p-2"><?php echo $row["product_name"];   ?></div>
                    <div class="col-xl-12 col-lg-12 mt-2 p-2">WEB ID : <?php print $id?></div>
                    <div class="col-xl-12 col-lg-12 text-center    m-1">  <hr class="bg-danger w-100"> </div>
                    <div class="col-xl-12 col-lg-12  mt-2 p-2"><?php echo $row["product_desc"];   ?></div>
                    <div class="col-xl-12 col-lg-12 text-center    m-1">  <hr class="bg-danger w-100"> </div>
                     <div class="col-xl-12 col-lg-12  h3 text-danger mt-2 p-2">Rs <?php echo $row["product_price"];   ?></div>
                     <div class="col-xl-12 col-lg-12  h3 text-danger mt-2 p-2">
                         <div class="form-group"> 
                             <center> <input type="number" class="form-control" min="1" id="inputAddress2" name="qty" value="<?php echo $row["product_qty"];  ?>"></center>
                          </div>
                    </div>
                    <?php
                 }
            }
        
        ?>
                     <div class="col-xl-12 col-lg-12 h3 text-danger mt-2 p-2">
                         <div class="form-group"> 
                            <input type="submit" class="btn btn-primary" value="Add to cart" name="AddBtn">
                          </div>
                    </div>
                
                </div>
                  
            </div>
         
        </div>
        
        
        </form>
        
          <div class="row">
            <div class="col-xl-6 col-lg-6 shadow ">
                <div class="row">
                    <div class="col-xl-12 col-lg-12  pt-1" style="background:#FF4500;"> </div>
                        <div class="col-xl-12 col-lg-12 shadow   pt-1"  >
                            Costomer Feedbacks
                        </div>  
                    <?php
                        $sqlfeedback="SELECT * FROM feedback  limit 0,7";
                            if($resultfeedbackt=mysqli_query($db,$sqlfeedback)){
                                 while ($rowfeedback=mysqli_fetch_array($resultfeedbackt))
                               {
                                     
                                     $FBUser =$rowfeedback["User"];
                                     $FBContent =$rowfeedback["FeedBack"];
                                   }
                            }    
                                    
                                       
                                
                    
                    ?>
                    <div class="col-xl-12 col-lg-12 "  >
                       
                        <?php    
                        
                             $sqlfeedback="SELECT * FROM feedback  limit 0,7";
                            if($resultfeedbackt=mysqli_query($db,$sqlfeedback)){
                                 while ($rowfeedback=mysqli_fetch_array($resultfeedbackt))
                               {
                                     
                                     $FBUser =$rowfeedback["User"];
                                     $FBContent =$rowfeedback["FeedBack"];
                                     
                                     echo ' <div class="row">';
                                     echo'<div class="col-xl-4 col-lg-4   col-md-4">'.$FBUser.'</div>';
                                     echo'<div class="col-xl-8 col-lg-8   col-md-8">'.$FBContent.'</div>';
                                     echo '    </div>';
                                     echo '<hr>';
                                }
                            }  
                               
                        
                        ?>
                            
                    </div> 
                </div>
            </div> 
            <div class="col-xl-6 col-lg-6 shadow">
                <div class="col-xl-6 col-lg-6   mt-2 pt-2 pb-2 pl-5 pr-5 "> <?php echo $Mem;?></div>
                <form method="post" action="productsDetails.php">
                    
                   <textarea class="form-control" name="feedback" id="exampleFormControlTextarea1" maxlength="150" rows="5"></textarea>  <br>
                   <input type="submit" class="btn btn-primary" value="Write your feedback" name="FeedbackBtn">
                    
                </form>
            </div>
        </div><br><br>
        
      
    
         
        
        
      
        
        
        
        
        
        <div>
            <div>
                
                    <?php include("footer.php");?> 
                
            </div>
        </div>

    </main><!-- /.container -->


    
    
    
    
    
     
    
    
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>
</html>