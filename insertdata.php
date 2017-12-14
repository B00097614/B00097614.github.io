<?php
$link = mysqli_connect("localhost", "root", "", "demo");
 
	if($link === false){
		die("ERROR: Could not connect. " . mysqli_connect_error());
	}	
 
	$sql = "INSERT INTO persons (username, email, password) VALUES ('login.php.uname', 'login.php.mail', 'login.php.pass')";
	
	if(mysqli_query($link, $sql)){
		echo "Records inserted successfully.";	
		} 
		
		else {
			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
		}
 
mysqli_close($link);
?>