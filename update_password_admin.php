<?php
	session_start();
	if($_SESSION['login']==TRUE AND $_SESSION['status']=='Active'){
		
		//session_start();
		include("db_con/dbCon.php");
		
	?>
	<!doctype html>
	<html lang="en">
		<head>
			<!-- Required meta tags -->
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
			
			<!-- Bootstrap CSS -->
			<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
			<link rel="stylesheet" href="css/all.css">
			<link rel="stylesheet" href="css/simple-sidebar.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/style.css">
			<link rel="stylesheet" href="css/media.css">
			<title></title>
		</head>
		<body>
			<header class="customnav">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<nav class="navbar navbar-expand-lg ">
								<a class="navbar-brand cus-a" href="index.php">Lawyer Management System</a>
								
								
								<div class="collapse navbar-collapse" id="navbarSupportedContent">
									<ul class="navbar-nav ml-auto ">
										<li class="">
											<a class="nav-link cus-a" href="#">Full Name: <?php echo $_SESSION['first_Name'];?> <?php echo $_SESSION['last_Name'];?></a>
											</li>
										<li class="">
											<a class="nav-link cus-a" href="logout.php">Log Out</a>
										</li>
										
									</ul>
									
								</div>
							</nav>
						</div>
					</div>
				</div>
			</header>
			<body>
				
				<div class="d-flex" id="wrapper">
					
					<!-- Sidebar -->
					<div class="bg-light border-right" id="sidebar-wrapper">
						<div class="sidebar-heading">My Profile</div>
						<div class="list-group list-group-flush">
							<a href="user_dashboard.php" class="list-group-item list-group-item-action bg-light">Dashboard</a><!--this page-->
							<a href="user_profile.php" class="list-group-item list-group-item-action bg-light">Edit Profile</a><!--user_profile page-->
							<a href="user_booking.php" class="list-group-item list-group-item-action bg-light">My booking requests</a><!--booking page-->
							<a href="update_password_admin.php" class="list-group-item list-group-item-action bg-light">Update Password</a>
						</div>
					</div>
					<!-- /#sidebar-wrapper -->
					
					<!-- Page Content -->
					<div id="page-content-wrapper">
						<?php if(isset($_GET['done'])){
							echo "<div class='alert alert-danger alert-dismissible fade show'>
							<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
							<strong>Welcome!</strong> You are login as a normal user.
							</div>";
						}?>
						<div class="container-fluid">
						<br/>
							<div class="card">
									<div class="card-title">
										<h4>Update Password</h4>
										
									</div>
									<div class="card-body">
										<script type="text/javascript">
											$(document).ready(function() {
												$('#example-progress-bar-hierarchy').strengthMeter('progressBar', {
													container: $('#example-progress-bar-hierarchy-container'),
													hierarchy: {
														'0': 'progress-bar-danger',
														'10': 'progress-bar-warning',
														'15': 'progress-bar-success'
													}
												});
											});
										</script>
										<?php
											include_once 'db_con/dbCon.php';
											$con = connect();
											if(isset($_POST['update'])){											
												$email = $_SESSION['email'];
												$password = mysqli_real_escape_string($con, $_POST['current']);
												$new_password=$_POST['new_password'];
												$p_length=strlen($new_password);
												//echo $p_length;
												if($p_length <=5){
													echo "<div class='alert alert-danger'>
													Sorry User New Password Should be Minimum  6 Character .
													</div>";
													}else{
													$result = mysqli_query($con, "SELECT * FROM user WHERE email = '" . $email. "' and password = '" . $password. "' and role='Lawyer'");
													if ($row = mysqli_fetch_array($result)) {													
														$query="UPDATE user set password='$new_password' where email='$email'";
														if(mysqli_query($con,$query)){
															echo "<div class='alert alert-success'>
															<strong>Password Successfuly Updated.</strong> 
															</div>";
														}
														}else{
														echo "<div class='alert alert-danger'>
														Soory Lawyer... Inputed Current Password is Wrong.Please Type Again...
														</div>";
													}
												}
											}
										?>
										<div class="basic-form">
										
											<form autocomplete="off" method="post" action="update_password_admin.php">				  
												<div class="form-group row">
													<label for="inputPassword" class="col-sm-3 col-form-label">Current Password</label>
													<div class="col-sm-8" style="fload:right">
														<input type="password" name="current" class="form-control" required id="inputPassword" placeholder="Please Type Your Current Password">
														
													</div>
												</div>
												<div class="form-group row">
													<label for="inputPassword" class="col-sm-3 col-form-label">New Password</label>
													<div class="col-sm-8">
														<input type="password" name="new_password" onblur="checkLength(this)" class="form-control" id='password'  maxlength="30" required placeholder="Please Type Your New Password">
													</div>
												</div>
												
												<div class="form-group row">
													<label for="inputPassword" class="col-sm-3 col-form-label">Confirm Password</label>
													<div class="col-sm-8">
														<input type="password" name="confirm_password" class="form-control" id='confirm_password' required  placeholder="Please Type Your Confirm Password">
													</div>
												</div>
												<div class="form-group row">
													
													<div class="col-sm-8" style="margin-left:40%">
														<input type="submit" name="update" value="Update"  class="btn btn-success">
													</div>
												</div>
											</form>
											<script>
												var password = document.getElementById("password")
												, confirm_password = document.getElementById("confirm_password");
												
												function validatePassword(){
													if(password.value != confirm_password.value) {
														confirm_password.setCustomValidity("Passwords Don't Match");
														} else {
														confirm_password.setCustomValidity('');
													}
												}											
												password.onchange = validatePassword;
												confirm_password.onkeyup = validatePassword;																								
											</script>
										</div>
									</div>
								</div>
							</div>
					</div>
					<!-- /#page-content-wrapper -->
					
				</div>
				<!-- /#wrapper -->
				
				
				
			</body>
			<footer>
				<div class="container">
					<div class="row">
						<div class="col">
							<h5>All rights reserved by Md. Ershadul Bari 2019</h5>
						</div>
					</div>
				</div>
			</footer>
			<!-- Optional JavaScript -->
			<!-- jQuery -->
			
			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
			<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		</body>
	</html>				
	<?php
		
	}else 
	header('location:login.php?deactivate');
?>