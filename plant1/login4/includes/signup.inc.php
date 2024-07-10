<?php

if (isset($_POST['submit'])) {
	  
	 include_once 'dbh.inc.php';

	 $first = mysqli_real_escape_string($conn, $_POST['first']);
	 $last = mysqli_real_escape_string($conn, $_POST['last']);
	 $email = mysqli_real_escape_string($conn, $_POST['email']);
	 $uid = mysqli_real_escape_string($conn, $_POST['uid']);
	 $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	 //Error handlers
	 //check for empty fields
if (empty($first) || empty($last) || empty($email) || empty($uid) || empty($pwd)) {
	
?>
            	<script language='javascript'>window.location=' ../signup.php?signup=empty'</script>
            	<?php

	exit();
}else{
	//check if input characters are valid
	if (!preg_match("/^[a-zA-Z]*$/", $first) || !preg_match("/^[a-zA-Z]*$/", $last)) {
		
		?>
            	<script language='javascript'>window.location='  ../signup.php?signup=invalid'</script>
            	<?php
		exit();
	}else{
		//chack the email is valid
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

			?>
            	<script language='javascript'>window.location=' ../signup.php?signup=email'</script>
            	<?php
			
		exit();
		}else{
			$sql = "SELECT * FROM users WHERE user_uid='uid'";
			$result =mysqli_query($conn, $sql);
			$resultCheck =mysqli_num_rows($result);

			if ($resultCheck > 0) {
			

			?>
            	<script language='javascript'>window.location='../signup.php?signup=invalid'</script>
            	<?php

			exit();
			} else{
				//hashing the password
				$hashedPwd = password_hash($pwd,PASSWORD_DEFAULT);
				//Insert the user into the database
				$sql = "INSERT INTO users(user_first, user_last, user_email, user_uid, user_pwd) VALUES ('$first','$last', '$email', '$uid', '$hashedPwd' );";
				$result =mysqli_query($conn, $sql);	
			

			?>
            	<script language='javascript'>window.location='../signup.php?signup=success'</script>
            	<?php

			exit();		
			}
		}
	}
}

}else{
	?>
    <script language='javascript'>window.location='../signup.php'</script>
    <?php
	
	exit();
}

				