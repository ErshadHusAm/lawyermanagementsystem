<?php
	include("db_con/dbCon.php");
	$conn = connect();
	if(isset($_GET['unblock_id'])){
		
		$id = $_GET['unblock_id'];
		//echo $id;exit;
		$findSql="SELECT * FROM user where u_id='$id'";
		$resultData=$conn->query($findSql);
		foreach($resultData as $items){
			$first_Name=$items['first_Name'];
			$last_Name=$items['last_Name'];
			$password=$items['password'];
			$email=$items['email'];
		}
		include 'send_confirm_mail_lawyer.php';
		
		$sql = "UPDATE `user` SET `status`='Active' WHERE u_id='$id'";
		//echo $sql;
		$conn->query($sql);
		header("Location:admin_lawyer.php");
	}
?>