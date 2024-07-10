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
      <h1>Student Management System</h1>  
  </div>
  <div class="panel-body">
<a href="home.php"class="btn btn-primary ">Back</a>


<?php
  
       if($_SERVER['REQUEST_METHOD']=='POST'){
           $student=$_POST['student'];
           $index=$_POST['index'];
           $web=$_POST['web'];
           $java=$_POST['java'];
           $mobile=$_POST['mobile'];

           if($student=='' || $index=='' || $web=='' ||  $java=='' || $mobile==''){
              echo "Please fill out all the fields";
         }else{

             $query="insert into student(StudentName,IndexNo,WebProgramming,JavaProgramming,MobileAppDevelopment) values('$student','$index',$web,$java,$mobile)";

             $result=$link->query($query);
             if($result){
                 echo "Student added successfully";
             }else{
                echo "Error Student not added";
           }
          

       }

     }

?>




<form method="post">
     <div class="form-group">
        <label>Student Name</label>
        <input required type="text" name="student" class="form-control">
     </div>

     <div class="form-group">
        <label>Student Index</label>
        <input type="num" name="index" class="form-control">
     </div>

    <div class="form-group">
        <label>Web Programming</label>
        <input type="num" name="web" class="form-control">
     </div>
    
    <div class="form-group">
        <label>Java Programming</label>
        <input type="num" name="java" class="form-control">
     </div>

     <div class="form-group">
        <label>Mobile App Development</label>
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


