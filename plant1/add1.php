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
      <h1>Make A Order</h1>  
  </div>
  <div class="panel-body">


<?php
  
       if($_SERVER['REQUEST_METHOD']=='POST'){
           $name=$_POST['name'];
           $email=$_POST['email'];
           $password=$_POST['password'];
           $address=$_POST['address'];
           $contact=$_POST['contact'];
           $item=$_POST['item'];
           $pices=$_POST['pices'];
           $place=$_POST['place'];
           $time=$_POST['time'];

           if($name=='' || $email=='' || $password=='' ||  $address=='' || $contact=='' || $item=='' || $pices=='' || $place=='' || $time==''  ){
              echo "Please fill out all the fields";
         }else{

             $query="insert into order(CustomerName,Email,Password,CustomerAddress,ContactNumber,Item,Pices,DiliverPlace,DiliverTime) values('$name','email','$Password','$address','$contact','$item',$pices,'$place',$time)";

             $result=$link->query($query);
             if($result){
                 echo "order added successfully";
             }else{
                echo "Error order not added";
           }
          

       }

     }

?>




<form method="post">
     <div class="form-group">
        <label>Customer Name</label>
        <input required type="text" name="student" class="form-control">
     </div>

     <div class="form-group">
        <label>Email</label>
        <input type="num" name="index" class="form-control">
     </div>

    <div class="form-group">
        <label>Password</label>
        <input type="num" name="web" class="form-control">
     </div>
    
    <div class="form-group">
        <label>Customer Address</label>
        <input type="num" name="java" class="form-control">
     </div>

     <div class="form-group">
        <label>Contact Number</label>
        <input type="num" name="mobile" class="form-control">
     </div>

     <div class="form-group">
        <label>Item</label>
        <input type="num" name="mobile" class="form-control">
     </div>

     <div class="form-group">
        <label>Pices</label>
        <input type="num" name="mobile" class="form-control">
     </div>

     <div class="form-group">
        <label>Diliver Place</label>
        <input type="num" name="mobile" class="form-control">
     </div>

     <div class="form-group">
        <label>Diliver Time</label>
        <input type="num" name="mobile" class="form-control">
     </div>





     <div class="form-group">
        
        <input type="submit" name="submit" class="btn btn-primary">
     </div>

</form>
    
    
    
    

  </div>

</div>



</body>
</html>


