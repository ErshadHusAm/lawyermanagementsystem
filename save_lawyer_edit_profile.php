
<?php
	session_start();
	include_once 'db_con/dbCon.php';
	$a=$_SESSION['lawyer_id'];
	$okFlag = TRUE;
	if($okFlag){
		$first_Name = $_POST['first_Name'];
		$last_Name = $_POST['last_Name'];
		$contact_number = $_POST['contact_number'];
		$university_College = $_POST['university_College'];
		$degree = $_POST['degree'];
		$passing_year = $_POST['passing_year'];
		$full_address = $_POST['full_address'];
		$city = $_POST['city'];
		$zip_code = $_POST['zip_code'];
		$practise_Length = $_POST['practise_Length'];
		$speciality = $_POST['speciality'];
		
		$conn = connect();
		$sql = "UPDATE `user` SET first_Name ='$first_Name',last_Name='$last_Name' WHERE u_id='$a'";
		$fresult=mysqli_query($conn, $sql) or die(mysqli_error ($conn));
		if($fresult==1)
		{
			$sql2= "UPDATE lawyer SET contact_number='$contact_number',university_College='$university_College',degree='$degree',passing_year='$passing_year',full_address='$full_address',city='$city',zip_code='$zip_code',practise_Length='$practise_Length',speciality='$speciality' WHERE lawyer_id='$a'";
			
			$fresult2=mysqli_query($conn, $sql2) or die(mysqli_error ($conn));
			if ($fresult2==1)
			{
				header('location:lawyer_edit_profile.php?ok');
				
			}
		}
		
	}
?>