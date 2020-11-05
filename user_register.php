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
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h1>Hello !!! <i class="fas fa-hand-paper"></i></h1>
						<h3>Register here to find suitable lawyers <i class="fas fa-hand-point-right"></i></h3>
					</div>
					<div class="col-md-6">
						<form action="user_registation.php" method="POST" enctype="multipart/form-data" id="validateForm">
							
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="fname">First Name</label>
									<input type="text" class="form-control" name="first_Name"  id="first_Name" placeholder="first name">
								</div>
								<div class="form-group col-md-6">
									<label for="lname">Last Name</label>
									<input type="text" class="form-control" name="last_Name"  id="last_Name" placeholder="last name">
								</div>
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="email address">
							</div>
							<div class="form-group">
								<label for="num">Contact Number</label>
								<input type="text" class="form-control" name="contact_number" id="contact_number" placeholder="contact number">
							</div>
							<div class="form-group">
								<label for="num">Image</label>
								<input type="file" class="form-control" name="fileToUpload" id="image" oninput="CheckValue(this);"  >
							</div>
							
							<div class="form-row"><label for="edu"><small>Put Your address here </small></label></div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="address">Full Address</label>
									<input type="text" class="form-control" name="full_address" id="full_address" placeholder="full address">
								</div>
								<div class="form-group col-md-3">
									<label for="city">City</label>
									<select id="city" name="city" class="form-control">
										<option value=" " selected>Choose...</option>
										<option value="Dhaka">Dhaka</option>
										<option value="Chittagong">Chittagong</option>
										<option value="Sylhet">Sylhet</option>
										<option value="Barishal">Barishal</option>
										<option value="Khulna">Khulna</option>
										<option value="Mymensingh">Mymensingh</option>
										<option value="Rajshahi">Rajshahi</option>
										<option value="Rangpur"></option>
									</select>
								</div>
								<div class="form-group col-md-3">
									<label for="zip">Zip code</label>
									<input type="text" class="form-control" name="zip_code" id="zip_code" placeholder="zip code">
								</div>
							</div>
							
							
							<div class="form-group">
								<div class="form-check">
									
									<input id="accept" name="agree" type="checkbox" value="y" /><strong>I Agree with terms & conditions </strong>
								</div>
							</div>
							<input name="post" type="submit" class="btn btn-block btn-success" value="Register" />
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
					<h5>All rights reserved by Md. Ershadul Bari 2019</h5>
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
				validating: 'glyphicon glyphicon-refresh'
			},
			fields: {
				first_Name: {
					validators: {
						stringLength: {
							min: 3,
							message: 'Please Enter your First name with minimum 3 letters length',
						},
						notEmpty: {
							message: 'Please Enter your First name'
						}
					}
					},
					last_Name: {
						validators: {
							stringLength: {
								min: 3,
								message: 'Please Enter your Last name with minimum 3 letters length',
							},
							notEmpty: {
								message: 'Please Enter your Last name'
							}
						}
					},
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
					contact_number: {
						validators: {
							stringLength: {
								min: 11,
								max:11,
								message: 'Contract Number Must be 11 Digit',
							},
							numeric: {
								message: 'The phone no must be a number'
							},
							notEmpty: {
								message: 'Please Enter your phone number'
							}
						}
					},
					fileToUpload: {
						validators: {
							notEmpty: {
								message: 'Please Upload Your Image'
							}
						}
					},
					full_address: {
						validators: {
							notEmpty: {
								message: 'Please Upload Your Image'
							}
						}
					},
					zip_code: {
						validators: {
							stringLength: {
								min: 4,
								max:4,
								message: 'Zip Code Must be 4 Digit',
							},
							numeric: {
								message: 'Zip Code must be a number'
							},
							notEmpty: {
								message: 'Please Enter Zip Code'
							}
						}
					},
					city: {
						validators: {
							notEmpty: {
								message: 'Choose your user City'
							}
						}
					},
					agree: {
						validators: {
							notEmpty: {
								message: 'Please Check Terms & Conditions is required'
							}
						}
					},
				}
			});
			
		</script>
		
	</body>
</html>
