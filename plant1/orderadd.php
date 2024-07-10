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
      <h1>Lakpriya Flora Plant Nursery</h1>  
  </div>
  <div class="panel-body">
<a href="index.php"class="btn btn-primary ">Back</a>


<?php
  
       if($_SERVER['REQUEST_METHOD']=='POST'){
           $customer=$_POST['customer'];
           $email=$_POST['email'];
           $username=$_POST['username'];
           $password=$_POST['password'];
           $address=$_POST['address'];
           $contact=$_POST['contact'];
           $item=$_POST['item'];
           $pices=$_POST['pices'];
           $place=$_POST['place'];
           $date=$_POST['date'];

           if($customer=='' || $email=='' || $username=='' ||  $password=='' || $address=='' || $contact=='' || $item=='' || $pices=='' || $place=='' || $date=='' ){
              echo "Please fill out all the fields";
         }else{

             $query="insert into orders(CustomerName,Email,username,Password,CustomerAddress,ContactNumber,ItemNumber,Pices,DiliverPlace,DiliverDate) values('$customer','$email','$username','$password','$address',$contact,'$item',$pices,'$place',$date)";

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
        <input required type="text" name="customer" class="form-control">
     </div>

     <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
     </div>

    <div class="form-group">
        <label>User Name</label>
        <input type="text" name="username" class="form-control">
     </div>
    
    <div class="form-group">
        <label>Password</label>
        <input type="password" name="password" class="form-control">
     </div>

     <div class="form-group">
        <label>Customer Address</label>
        <input type="text" name="address" class="form-control">
     </div>

     <div class="form-group">
        <label>Contact Number</label>
        <input type="num" name="contact" class="form-control">
     </div>

     <div class="form-group">
        <label>Item Number</label>
        <input type="num" name="item" class="form-control">
     </div>

     <div class="form-group">
        <label>Pices</label>
        <input type="num" name="pices" class="form-control">
     </div>

     <div class="form-group">
        <label>Diliver Place</label>
        <input type="text" name="place" class="form-control">
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


