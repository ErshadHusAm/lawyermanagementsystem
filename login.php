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
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/media.css">
		<title>Log In here</title>
<style>
  .has-error .help-block {
  color: red;
}
  </style>

	</head>
	<body>
		<header class="customnav">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav class="navbar navbar-expand-lg ">
							<a class="navbar-brand cus-a" href="#">Lawyer Management System</a>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav ml-auto ">
									<li class="active">
										<a class="nav-link cus-a" href="index.php">Home <span class="sr-only">(current)</span></a>
									</li>
									<li class="">
										<a class="nav-link cus-a" href="lawyers.php">Lawyers</a><!--lawyers.html page-->
									</li>
									<li class="">
										<a class="nav-link cus-a" href="#">About Us</a>
									</li>
									<li class="">
										<a class="nav-link cus-a" href="login.php">Login</a>
										</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle cus-a" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
											Register
										</a>
										<div class="dropdown-menu" aria-labelledby="navbarDropdown">
											<a class="dropdown-item" href="lawyer_register.php">Register as a lawyer</a><!--redirect lawyer register page-->
											<a class="dropdown-item" href="user_register.php">Register as a user</a><!--redirect user register page-->

										</div>
									</li>


								</ul>

							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<section class="registerform">
			<?php
				if(isset($_GET['error'])){
				//echo "<script>alert('Email or Password is wrong');</script>";
				echo "
				<div style='margin-left:30%; margin-right:30%'>
					<div class='alert alert-danger alert-dismissible'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						Sorry User ...<strong>Wrong!</strong> Email or Password.
					</div>
				</div>";
				}
				else if(isset($_GET['deactivate'])){
				//echo "<script>alert('Email or Password is wrong');</script>";
				echo "
				<div style='margin-left:30%; margin-right:30%'>
					<div class='alert alert-danger alert-dismissible'>
						<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
						<center>Sorry User ...<br/>Please Type your Valid Email & Password</center>
					</div>
				</div>";
			}?>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2>Hello !!! <i class="fas fa-hand-paper"></i></h2><hr/>
						<h4>Login here to find suitable lawyers or User Request <i class="fas fa-hand-point-right"></i></h4>
					</div>
					<div class="col-md-6">
						<form action="db_con/db_login.php" method="POST"  id="validateForm">

							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="Enter your Valid Email address">
							</div>
							<div class="form-group">
								<label for="num">Password</label>
								<input type="password" class="form-control" name="passord" id="passord" placeholder="Enter your  Valid Password">
							</div>

							<input name="login" type="submit" class="btn btn-block btn-success" value="Login" />
							<!--after signup redirect user dashboard page-->
						</form>
					</div>
				</div>
			</div>
		</section>
		<footer>
			<div class="container">
				<div class="row">
					<div class="col">
						<h5>All rights reserved by Md. Ershadul Bari 
							<script>document.write(new Date().getFullYear());</script>
						</h5>
					</div>
				</div>
			</div>
		</footer>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>

		<script>
			$('#validateForm').bootstrapValidator({
				feedbackIcons: {
					valid: 'glyphicon glyphicon-ok',
					invalid: 'glyphicon glyphicon-remove',
					validating: 'glyphicon glyphicon-refresh'
				},
				fields: {
					email: {
						validators: {
							notEmpty: {
								message: 'Please Enter your email address'
							},
							emailAddress: {
								message: 'Please Enter a valid email address'
							}
						}
					},
					password: {
						validators: {
							notEmpty: {
								message: 'Please Enter Your Password'
							}
						}
					},
				}
			});

		</script>

	</body>
</html>
