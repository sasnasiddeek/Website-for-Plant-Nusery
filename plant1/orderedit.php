<!doctype html>
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
<a href="order1.php"class="btn btn-primary ">Back</a>


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

           if($customer=='' || $email=='' || $username=='' || $password=='' || $address=='' || $contact=='' || $item=='' || $pices=='' || $place=='' || $date==''  ){
              echo "Please fill out all the fields";
         }else{

             $Id=$_GET['editid'];
             $query="update orders set CustomerName='$customer',Email='$email',username='$username',Password='$password',CustomerAddress='$address',ContactNumber=$contact,ItemNumber='$item',Pices=$pices,DiliverPlace='$place',DiliverDate=$date where Id=$Id";

             $result=$link->query($query);
             if($result){
                 echo "order update";
             }else{
                echo "Error order not update";
           }
          

       }

     }

?>

<?php
     if(isset($_GET['editid'])){
             $editid=$_GET['editid'];

             $getonline_exams="select * from orders where id=$editid";
             $result=$link->query($online_exams);
             if($result->num_rows>0){
                while($val=$result->fetch_assoc()){

              
           

      


?>




<form method="post">
     <div class="form-group">
        <label>Cutomer Name</label>
        <input value="<?php echo $val['CustomerName']; ?>" required type="text" name="customer" class="form-control">
     </div>

    <div class="form-group">
        <label>Email</label>
        <input value="<?php echo $val['Email']; ?>" type="text" name="email" class="form-control">
     </div>

    <div class="form-group">
        <label>User Name</label>
        <input value="<?php echo $val['username']; ?>" type="text" name="username" class="form-control">
     </div>
    
    <div class="form-group">
        <label>Password</label>
        <input value="<?php echo $val['Password']; ?>" type="text" name="password" class="form-control">
    </div>"

     <div class="form-group">
        <label>Customer Address</label>
        <input value="<?php echo $val['CustomerAddress']; ?>" type="text" name="address" class="form-control">
     </div>

      <div class="form-group">
        <label>Contact Number</label>
        <input value="<?php echo $val['ContactNumber']; ?>" type="num" name="contact" class="form-control">
     </div>

      <div class="form-group">
        <label>Item Number</label>
        <input value="<?php echo $val['ItemNumber']; ?>" type="num " name="item" class="form-control">
     </div>

     <div class="form-group">
        <label>Pices</label>
        <input value="<?php echo $val['Pices']; ?>" type="num " name="pices" class="form-control">
     </div>

     <div class="form-group">
        <label>Diliver Place</label>
        <input value="<?php echo $val['DiliverPlace']; ?>" type="text" name="place" class="form-control">
     </div>

     <div class="form-group">
        <label>Diliver Date</label>
        <input value="<?php echo $val['DiliverDate']; ?>" type="num" name="date" class="form-control">
     </div>

     <div class="form-group">
        
        <input type="submit" value="Update" name="submit" class="btn btn-primary">
     </div>

</form>
<?php }}} ?>


    
    
    
    

  </div>

</div>



</body>
</html>

