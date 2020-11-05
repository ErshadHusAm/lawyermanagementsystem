<?php
	if(isset($_POST['login'])){
		require('dbCon.php');
		$con = connect();
		session_start();
		
		$email = mysqli_real_escape_string($con, $_POST['email']);
		$password = mysqli_real_escape_string($con, $_POST['passord']);
		
		$result = mysqli_query($con, "SELECT * FROM user INNER JOIN lawyer on user.u_id=lawyer.lawyer_id WHERE email = '" . $email. "' and password = '" . $password. "' and role='Lawyer' and status='Active'");
		$result2 = mysqli_query($con, "SELECT * FROM user INNER JOIN client on user.u_id=client.client_id WHERE email = '" . $email. "' and password = '" . $password. "' and role='User' and status='Active'");
		$result3 = mysqli_query($con,"SELECT * FROM user INNER JOIN administrator on user.u_id=administrator.administrator_id where email = '" . $email. "' and password = '" . $password. "' and role='Admin'");
		if ($row = mysqli_fetch_array($result)) {
			$_SESSION['email']=$email;
			//$_SESSION['password']=$password;
			$_SESSION['first_Name']=$row['first_Name'];
			$_SESSION['last_Name']=$row['last_Name'];
			$_SESSION['lawyer_id']=$row['lawyer_id'];
			$_SESSION['status']=$row['status'];
			$_SESSION['login']=TRUE;
			//include('send_mail.php');
			//echo "OK";
			header("Location:../lawyer_dashboard.php?done");	
		}
		else if ($row = mysqli_fetch_array($result2)) {
			$_SESSION['email']=$email;
			//$_SESSION['password']=$password;
			$_SESSION['first_Name']=$row['first_Name'];
			$_SESSION['last_Name']=$row['last_Name'];
			$_SESSION['client_id']=$row['client_id'];
			$_SESSION['status']=$row['status'];
			$_SESSION['login']=TRUE;
			//include('send_mail.php');
			//echo "OK";
			header("Location:../user_dashboard.php?done");		
		}else if ($row = mysqli_fetch_array($result3)) {
			$_SESSION['email']=$email;
			//$_SESSION['password']=$password;
			$_SESSION['first_Name']=$row['first_Name'];
			$_SESSION['last_Name']=$row['last_Name'];
			$_SESSION['status']=$row['status'];
			$_SESSION['login']=TRUE;
			//include('send_mail.php');
			//echo "OK";
			header("Location:../admin_dashboard.php?done");		
		}
		else {
			//echo "error msg";
			header('location:../login.php?error');
		}
	}
	else {
		//echo "error msg";
	header('location:../login.php?deactivate');}
?>		