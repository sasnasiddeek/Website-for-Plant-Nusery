<?php

session_start();

if (isset($_POST['submit'])) {

	include 'dbh.inc.php';

	$uid = mysqli_real_escape_string($conn, $_POST['uid']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
	$v = "";

	//error handlers
	//Check if input are empty
	if (empty($uid) || empty($pwd)) {
			
?>
            	<script language='javascript'>window.location='../signup.php?login=empty'</script>
            <?php

			echo "passwerd or invalid";
		exit();
	}else{
		$sql ="SELECT * FROM users WHERE user_uid='$uid' OR user_email='uid'";
		$result =mysqli_query($conn, $sql);
		$resultCheck =mysqli_num_rows($result);
		if($resultCheck < 1){
			
			?>
            	<script language='javascript'>window.location='../signup.php?login=error'</script>
            <?php

			
		exit();	
		} else{
			if ($row = mysqli_fetch_assoc($result)) {
				//de-hashing the password
				$hashedPwdCheck =password_verify($pwd, $row['user_pwd']);
				if ($hashedPwdCheck ==false) {
					


				?>
            	<script language='javascript'>window.location='../signup.php?login=error'</script>
            <?php


					
					
					exit();	
				} elseif ($hashedPwdCheck == true) {
					//log in the user
					$_SESSION['u_id'] = $row['user_id'];
					$_SESSION['u_first'] = $row['user_first'];
					$_SESSION['u_last'] = $row['user_last'];
					$_SESSION['u_email'] = $row['user_email'];
					$_SESSION['u_uid'] = $row['user_uid'];
					$_SESSION['i']=1;
					
				
					///<script language='javascript'>window.location='error.php'</script>

					if ($uid == "admin") {
						?>
            	<script language='javascript'>window.location='../../admin/admin/index.php'</script>
            <?php
					
//header("Location: ../../admin/admin/index.php ");
						
					}

					///
?>
            	<script language='javascript'>window.location='../../index.php'</script>
            <?php

					exit();
				}
			}
		}
	}
}else{
	
?>
            	<script language='javascript'>window.location='../signup.php?login=error'</script>
            <?php

	exit();
}