<?php
session_start();
$db= mysqli_connect("localhost", "root", "","online_exams");
  

function adminLogin($username,$pass,$db)
{
  $sql="SELECT username,password FROM admin WHERE username='$username' AND password='$pass'";
  $ma=$db->query($sql);
  if($ma)
  {
    if($ma->num_rows==1)
    {
      $_SESSION["username"] = $username;
     // $_SESSION['usertype']='admin';
      header("location:../home.php");
    }
    else return false;
  }
}





?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

  
  <div class="panel-heading">
      <center><h1>Admin Login</h1> </center> 
  </div>
	<div id="frm">
		<form action="" method="POST">
			<P>
				<lable>Username:</lable>
				<input type="text" id="user" name="user" required="" />
			</P>
			<P>
				<lable>Password:</lable>
				<input type="password" id="pass" name="pass" required="" />
			</P>
			<P>
				
				<input type="submit" id="btn" name="login" value="Login" />
			</P>
		</form>
		<?php
                                if(isset($_POST["login"]))
{
  $username=$_POST["user"];
  $pass=$_POST["pass"];

  adminLogin($username,$pass,$db);
 
  echo "<p class=text-danger> User Name or Password is Incorrect</p>";
}  
                                ?>
	</div>

</body>
</html>