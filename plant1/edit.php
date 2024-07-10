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
           

           if($customer=='' || $username=='' || $approve=='' || $date=='' ){
              echo "Please fill out all the fields";
         }else{

             $Id=$_GET['editid'];
             $query="update customer set CustomerName='$customer',username='$username',Approve='$approve',DiliverDate=$date where Id=$Id";

             $result=$link->query($query);
             if($result){
                 echo "Customer update";
             }else{
                echo "Error Customer not update";
           }
          

       }

     }

?>

<?php
     if(isset($_GET['editid'])){
             $editid=$_GET['editid'];

             $getonline_exams="select * from customer where id=$editid";
             $result=$link->query($getonline_exams);
             if($result->num_rows>0){
                while($val=$result->fetch_assoc()){

              
           

      


?>




<form method="post">
     <div class="form-group">
        <label>Customer Name</label>
        <input value="<?php echo $val['CustomerName']; ?>" required type="text" name="customer" class="form-control">
     </div>

    <div class="form-group">
        <label>User Name</label>
        <input value="<?php echo $val['username']; ?>" type="text" name="username" class="form-control">
     </div>

    <div class="form-group">
        <label>Approve</label>
        <input value="<?php echo $val['Approve']; ?>" type="text" name="approve" class="form-control">
     </div>
    
    <div class="form-group">
        <label>Diliver Date</label>
        <input value="<?php echo $val['DiliverDate']; ?>" type="num" name="date" class="form-control">
    </div>"

    

     <div class="form-group">
        
        <input type="submit" value="Update" name="submit" class="btn btn-primary">
     </div>

</form>
<?php }}} ?>


    
    
    
    

  </div>

</div>



</body>
</html>

