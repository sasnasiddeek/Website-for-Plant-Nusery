<!--<?php
include("page/header.php")
?>--->

<?php
session_start();
$dbServername ="localhost";
$dbUsername ="root";
$dbPassword ="";
$dbName ="Project";

$conn =mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
   if(isset($_POST['submit']))
   {

   	 $first =$_POST['first'];
	 $last = $_POST['last'];
	 $email=$_POST['email'];
	 $uid  = $_POST['uid'];
	 $pwd  = $_POST['pwd'];
 	 $hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);
 	 
	 $_SESSION['u_first'] =  $first;
	 $_SESSION['u_last'] =  $last;
	 $_SESSION['u_email'] = $email;
	 $_SESSION['u_uid'] = $uid;
	


   $update="update users set user_first='".$first."',user_last='". $last."',user_email='".$email."',user_uid='".$uid."',user_pwd='".$hashedPwd."' where user_id=".$_SESSION['u_id'] ."";
   	mysqli_query($conn,$update);
   }
	

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sign in now</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form action="#" method="POST" class="login100-form validate-form p-l-55 p-r-55 p-t-178">
 					

 			
					<span class="login100-form-title">
						ENTER YOUR NEW DETAILS
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="first" placeholder="Firstname">
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="last" placeholder="lastname">
						<span class="focus-input100"></span>
					</div>


					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="email" placeholder="E-mail">
						<span class="focus-input100"></span>
					</div>

					

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100" type="text" name="uid" placeholder="Username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100" type="password" name="pwd" placeholder="Password">
						<span class="focus-input100"></span>
					</div>

					<div class="text-right p-t-13 p-b-23">
						<span class="txt1">
					
						</span>

						
					</div>

					<div class="container-login100-form-btn">
						<button type="submit" name="submit" class="login100-form-btn">
							UPDATE
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							
						</span>

						
					</div>
				</form>
			</div>
		</div>
	</div>


	
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	

</body>
</html>