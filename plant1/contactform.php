
<?php
include("pages/header.php")
?>
    
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="images/favicon.png">
    <title>Eat it</title>
    
    <!--Template based on URL below-->
    <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/starter-template/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Place your stylesheet here-->
    <link href="/css/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
             
             
     
    <main role="main" class="container">
        <div class="row">
            <div class="col-xl-4   p-1  "></div>
            <div class="col-xl-5  p-1 mt-5  ">
                
                <?php
                     include("dbConnection.php");
                
 

                        if(isset($_POST['MailBtn'])){
                            $User=$_POST['Uname'];
                            $Email=$_POST['email'];
                            $Query=$_POST['query'];


                            $sql="insert into contact (user,email,query) value ('$User','$Email','$Query')";
                            mysqli_query($db,$sql) ;
                            
                            
                            
                          

                        }
                
                ?> 
                
                 <h2 style="font-family: 'Cookie', cursive; color:#FF7F50;"> <b>Contact Us Form</b></h2><br>
    
    <form method="post" action="contactform.php">
  <div class="form-group">
    <label for="formGroupExampleInput">User Name</label>
    <input type="text" class="form-control" name="Uname" id="formGroupExampleInput" placeholder="">
  </div>
        
        <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
        
        <div class="form-group">
    <label for="exampleFormControlTextarea1">Query</label>
    <textarea class="form-control" name="query" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
         <button type="submit" class="btn btn-primary" name="MailBtn">Submit</button>
</form>
                
                
                 </div>
            <div class="col-xl-3   p-1 text-center"></div>
            
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