<?php

	//MySQL Database Connect 
	include '../datalogin.php';
	$tbl_name = "admin";

	// username and password sent from form 
	$myusername=$_POST['myusername']; 
	$mypassword=$_POST['mypassword']; 

	// To protect MySQL injection (more detail about MySQL injection)
	$myusername = htmlspecialchars($myusername);
	$mypassword = htmlspecialchars($mypassword);
	$myusername = mysqli_real_escape_string($conn, $myusername);
	$mypassword = mysqli_real_escape_string($conn, $mypassword);
	$sql="SELECT * FROM $tbl_name WHERE user_name='$myusername' and password='$mypassword'";
	$result = mysqli_query($conn, $sql);
	while($row = mysqli_fetch_array($result)) {
		$myuserid = $row['admin_id'];
		$myusername = $row['user_name'];
	}

	// Mysql_num_row is counting table row
	$count = mysqli_num_rows($result);

	// If result matched $myusername and $mypassword, table row must be 1 row
	if($count == 1){
		// Register $myusername, $mypassword and redirect to file "admin_home.php"
		session_start();
		
		//echo $myusername . " " . $myuserid;
		
		$_SESSION["username"] = $myusername;
		$_SESSION["user_id"] = $myuserid;
		
		//session_register("myusername");
		//session_register("mypassword"); 
		//session_register("myuserid");
		header("location:admin_home.php");
	}
	else 
	{
		echo "Wrong Username or Password";
	}
?>