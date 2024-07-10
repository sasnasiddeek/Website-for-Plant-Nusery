<doctype html>
<?php include_once("conn.php"); ?>
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



  <div class="panel panel-default container">
  <div class="panel-heading">
      <h1>Lakpriya Plant Nusery</h1>  
  </div>
  <div class="panel-body">
<a href="home.php"class="btn btn-primary ">Back</a>


<?php
  
       if($_SERVER['REQUEST_METHOD']=='POST'){
           $customer=$_POST['customer'];
           $username=$_POST['username'];
           $approve=$_POST['approve'];
           $date=$_POST['date'];
           

           if($customer=='' || $username=='' || $approve=='' ||  $date==''  ){
              echo "Please fill out all the fields";
         }else{

             $query="insert into customer(CustomerName,username,Approve,DiliverDate) values('$customer','$username','$approve',$date)";

             $result=$link->query($query);
             if($result){
                 echo "Customer added successfully";
             }else{
                echo "Error Customer not added";
           }
          

       }

     }

?>




<form method="post">
     <div class="form-group">
        <label>Customer Name</label>
        <input required type="text" name="customer" class="form-control">
     </div>

     <div class="form-group">
        <label>User Name</label>
        <input type="text" name="username" class="form-control">
     </div>

    <div class="form-group">
        <label>Approve</label>
        <input type="text" name="approve" class="form-control">
     </div>
    
    <div class="form-group">
        <label>Diliver Date</label>
        <input type="num" name="date" class="form-control">
     </div>

     
     <div class="form-group">
        
        <input type="submit" name="submit" class="btn btn-primary">
     </div>

</form>
    
    
    
    

  </div>

</div>



</body>
</html>


