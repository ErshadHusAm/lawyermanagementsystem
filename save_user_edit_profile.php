
<?php
	session_start();
	include_once 'db_con/dbCon.php';
	$a=$_SESSION['client_id'];
	$okFlag = TRUE;
	if($okFlag){
		$first_Name = $_POST['first_Name'];
		$last_Name = $_POST['last_Name'];
		$contact_number = $_POST['contact_number'];
		$full_address = $_POST['full_address'];
		$city = $_POST['city'];
		$zip_code = $_POST['zip_code'];
		
		$conn = connect();
		$sql = "UPDATE `user` SET first_Name ='$first_Name',last_Name='$last_Name' WHERE u_id='$a'";
		$fresult=mysqli_query($conn, $sql) or die(mysqli_error ($conn));
		if($fresult==1)
		{
			$sql2= "UPDATE client SET contact_number ='$contact_number',full_address ='$full_address', city ='$city',zip_code ='$zip_code' WHERE client_id='$a'";
			
			$fresult2=mysqli_query($conn, $sql2) or die(mysqli_error ($conn));
			if ($fresult2==1)
			{
				header('location:user_profile.php?ok');
				
			}
		}
		
	}
?>