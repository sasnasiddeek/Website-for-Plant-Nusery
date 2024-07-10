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

<?php
     if(isset($_GET['Id'])){
        $Id=$_GET['Id'];
        $delQuery="delete from student where Id=$Id";
        $delResult=$link->query($delQuery);
        if($delResult){
          echo "Student deleted";
        }else{
          echo "error student not deleted";
        }
}


?>
<div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <a class="navbar-brand" href="index.php">
                        <!-- Logo icon -->
                        
                        <!--End Logo icon -->
                         <!-- Logo text -->
                        <span class="logo-text">
                             <!-- dark Logo text -->
                             Online Exams Private Ltd
                            
                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->
                            
                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->
                        
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                           <a class="dropdown-item" href="student.php"><i class="fa fa-user"></i> Student</a>
                            
                            
                        </li>
                         <li class="nav-item dropdown">
                           <a class="dropdown-item" href="home.php"><i class="fa fa-book"></i> Result</a>
                            
                            
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                       
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                     
                        <li class="nav-item dropdown">
                           <a class="dropdown-item" href="login3/logout.php"><i class="fa fa-power-off m-r-5 m-l-5"></i> Logout</a>
                            
                            
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
           
<!--alert message end-->







        </header>
 
  <div class="panel panel-default container">
  <div class="panel-heading">
      <h1>Student Management System</h1> 
      
  </div>
  <div class="panel-body">
<a href="add.php"class="btn btn-primary pull-right">Add</a>
    <table class="table">
      <tr>
        <th>Student Id</th>
        <th>Student Index</th>
        <th>Student Name</th>
        <th> Web Programming</th>
        <th> Java Programmig</th>
        <th> Mobile App Development</th>
        <th> Action</th>
      </tr>
<?php
      $query="select * from student";
      $result=$link->query($query);
      if($result->num_rows>0){
        $i=0;
      while ($val=$result->fetch_assoc()) {
        $i++;
        
      



?>



      <tr>

        <td><?php echo $val['Id']; ?></td>
        <td><?php echo $val['StudentName']; ?></td>
        <td><?php echo $val['IndexNo']; ?></td>
        <td><?php echo $val['WebProgramming']; ?></td>
        <td><?php echo $val['JavaProgramming']; ?></td>
        <td><?php echo $val['MobileAppDevelopment']; ?></td>
        <td>
          
          <a href="?Id=<?php echo $val['Id']; ?>" class="btn btn-danger">Delete</a>
          <a href="edit.php?editid=<?php echo $val['Id']; ?>" class="btn btn-primary">Edit</a>

        </td>
      </tr>
<?php
      }}
      ?>
    </table>
  </div>

</div>




</body>
</html>



