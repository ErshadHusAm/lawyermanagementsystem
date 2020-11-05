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
						<h1>Hello Lawyer <i class="fas fa-user-tie"></i> !!</h1>
						<h2>please register your self here <i class="fas fa-hand-point-right"></i></h2>
					</div>
					<div class="col-md-6">
						<form  action="lawyer_registation.php"  method="post" enctype="multipart/form-data"  id="validateForm">
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="fname">First Name</label>
									<input type="text" class="form-control" id="first_Name" name="first_Name" placeholder="first name">
								</div>
								<div class="form-group col-md-6">
									<label for="lname">Last Name</label>
									<input type="text" class="form-control" id="lname" name="last_Name" placeholder="last name">
								</div>
							</div>

							<div class="form-group">
								<label for="num">Contact Number</label>
								<input type="text" class="form-control" name="contact_number" id="contact_number" placeholder="contact number">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input type="email" class="form-control" id="email" name="email" placeholder="email address">
							</div>
							<div class="form-group">
								<label for="num">Image</label>
								<input type="file" class="form-control" name="fileToUpload" id="image" oninput="CheckValue(this);"  >
							</div>.
							<div class="form-row"><label for="edu"><small>Put Your Last Education</small></label></div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="institute">University / College Name</label>
									<input type="text" class="form-control" id="institute" name="university_College" placeholder="Institute name">
								</div>
								<div class="form-group col-md-3">
									<label for="degree">Degree</label>
									<select id="degree" name="degree" class="form-control">
										<option value=" " selected>Choose...</option>
										<option value="LLB">LLB</option>
										<option value="LLM">LLM</option>
									</select>
								</div>
								<div class="form-group col-md-3">
									<label for="pyear">Passing Year</label>
									<select id="passing_year" name="passing_year" class="form-control">
										<option value=" " selected>Choose...</option>
										<option value="2000">2000</option>
										<option value="2001">2001</option>
										<option value="2002">2002</option>
										<option value="2003">2003</option>
										<option value="2004">2004</option>
										<option value="2005">2005</option>
										<option value="2006">2006</option>
										<option value="2007">2007</option>
										<option value="2008">2008</option>
										<option value="2009">2009</option>
										<option value="2010">2010</option>
										<option value="2011">2011</option>
										<option value="2012">2012</option>
										<option value="2013">2013</option>
										<option value="2014">2014</option>
										<option value="2015">2015</option>
										<option value="2016">2016</option>
										<option value="2017">2017</option>
										<option value="2018">2018</option>
										<option value="2019">2019</option>
									</select>
								</div>
							</div>
							<div class="form-row"><label for="edu"><small>Put Your chamber Location </small></label></div>
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="address">Full Address</label>
									<input type="text" class="form-control" id="address" name="full_address" placeholder="full address">
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
									<input type="text" class="form-control" id="zip" name="zip_code" placeholder="zip code">
								</div>
							</div>
							<div class="form-group">
								<label for="practise">Length of practise</label>
								<select id="practise" name="practise_Length" class="form-control">
									<option value=" " selected>Choose...</option>
									<option value="1-5 years">1-5 years</option>
									<option value="6-10 years">6-10 years</option>
									<option value="11-15 years">11-15 years</option>
									<option value="16-20 years">16-20 years</option>
									<option value="Most Senior">Most Senior</option>
								</select>
							</div>
							<div class="form-group">
								<!--a lawyer can choose 5 category at max-->
								<label for="speciality">Types of case handle</label>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="case_handle[]"  value="Criminal matter" id="crime">
									<label class="form-check-label" for="crime">
										Criminal matter
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox"  name="case_handle[]" value="Civil matter" id="civil">
									<label class="form-check-label" for="civil">
										Civil matter
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox"  name="case_handle[]" value="Writ Jurisdiction" id="civil">
									<label class="form-check-label" for="civil">
										Writ Jurisdiction
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox"  name="case_handle[]" value="Company law" id="com">
									<label class="form-check-label" for="com">
										Company law
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox"  name="case_handle[]" value="Contract law" id="con">
									<label class="form-check-label"  for="con">
										Contract law
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox"  name="case_handle[]" value="Commercial matter" id="comm">
									<label class="form-check-label" for="comm">
										Commercial matter
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="case_handle[]" value="Construction law" id="cons">
									<label class="form-check-label" for="cons">
										Construction law
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="case_handle[]" value="Information Technology" id="it">
									<label class="form-check-label"  for="it">
										Information Technology
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="case_handle[]"  value="Family Law" id="fam">
									<label class="form-check-label" for="fam">
										Family Law
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="case_handle[]"  value="Religious Matter" id="rel">
									<label class="form-check-label"  for="rel">
										Religious Matter
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="case_handle[]"  value="Investment Matter" id="inv">
									<label class="form-check-label" for="inv">
										Investment Matter
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="case_handle[]" value="Labour Law" id="lab">
									<label class="form-check-label" for="lab">
										Labour Law
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="case_handle[]"  value="Property Law" id="prop">
									<label class="form-check-label" value="Labour Law" for="prop">
										Property Law
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="case_handle[]"  value="Taxation Matter" id="tax">
									<label class="form-check-label"  for="tax">
										Taxation Matter
									</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="case_handle[]"  value="Others" id="oth">
									<label class="form-check-label"  for="oth">
										Others
									</label>
								</div>
							</div>
							<div class="form-group">
								<label for="practise">My Speciality</label>
								<select id="practise" name="speciality" class="form-control">
									<option value=" " selected>Choose...</option>
									<option value="Criminal Law">Criminal law</option>
									<option value="Civil Law">Civil law</option>
									<option value="Writ Jurisdiction">Writ Jurisdiction</option>
									<option value="Company Law">Company law</option>
									<option value="Contract Law">Contract law</option>
									<option value="Commercial Law">Commercial law</option>
									<option value="Construction Law">Construction law</option>
									<option value="IT Law">IT law</option>
									<option value="Family Law">Family law</option>
									<option value="Religious Law">Religious law</option>
									<option value="Investment Law">Investment law</option>
									<option value="Labour Law">Labour law</option>
									<option value="Property Law">Property law</option>
									<option value="Taxation Law">Taxation law</option>

								</select>
							</div>
							<div class="form-group">
								<div class="form-check">

									<input id="accept" name="agree" type="checkbox" value="y" /><strong>I Agree with terms & conditions </strong>
								</div>
							</div>
							<input name="post" type="submit" class="btn btn-block btn-success" value="Register" />
							<!--after signup redirect lawyer dashboard page-->
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



		<!-- Optional JavaScript -->
		<!-- jQuery -->

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
					university_College: {
						validators: {
							notEmpty: {
								message: 'Please Enter Your University or College'
							}
						}
					},
					degree: {
						validators: {
							notEmpty: {
								message: 'Choose your Degree'
							}
						}
					},
					passing_year: {
						validators: {
							notEmpty: {
								message: 'Choose Passing Year'
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
					practise_Length: {
						validators: {
							notEmpty: {
								message: 'Choose your Practise Length'
							}
						}
					},
					'case_handle[]': {
						validators: {
							notEmpty: {
								message: 'Please Select Types of case handle'
							}
						}
					},
					speciality: {
						validators: {
							notEmpty: {
								message: 'Choose your Speciality'
							}
						}
					},
				}
			});

		</script>

	</body>
</html>
