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
			<style>
				.containerr {
				width: 900px;
				padding-right: 10px;
				padding-left: 10px;
				margin-right: auto;
				margin-left: auto;
			</style>
			<!-- Bootstrap CSS -->
			<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
			<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
			<link rel="stylesheet" href="css/all.css">
			<link rel="stylesheet" href="css/simple-sidebar.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/style.css">
			<link rel="stylesheet" href="css/media.css">
			<title></title>
			<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
			<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
			<script type="text/javascript">
				google.charts.load('current', {'packages':['corechart']});
				google.charts.setOnLoadCallback(drawChart);
				
				function drawChart() {
					
					var data = google.visualization.arrayToDataTable([
					['Role','Number'],
					<?php
						
						$con = connect();
						$query="SELECT count(*) as number,role FROM user where  NOT role='Admin'  GROUP BY role";
						$result=mysqli_query($con,$query);
						while($row=mysqli_fetch_array($result))
						{
							echo "['".$row["role"]."',".$row["number"]."],";
						}
					?>
					]);
					var options = {
						'title':'Percentage of Registererd User & Lawyer',
						'legend':'left',
						'is3D':true,
						
					};
					
					var chart = new google.visualization.PieChart(document.getElementById('total'));
					
					chart.draw(data, options);
				}
			</script>
			<script type="text/javascript">
				google.charts.load('current', {'packages':['corechart']});
				google.charts.setOnLoadCallback(drawChart);
				
				function drawChart() {
					
					var data = google.visualization.arrayToDataTable([
					['Speciality','Number'],
					<?php
						
						$con = connect();
						$query="SELECT count(speciality) as number,speciality FROM user,lawyer WHERE user.u_id=lawyer.lawyer_id GROUP BY speciality";
						$result=mysqli_query($con,$query);
						while($row=mysqli_fetch_array($result))
						{
							echo "['".$row["speciality"]."',".$row["number"]."],";
						}
					?>
					]);
					var options = {
						'title':'Percentage of Registererd Lawyers Speciality',
						'legend':'left',
						'is3D':true,
						
					};
					
					var chart = new google.visualization.PieChart(document.getElementById('total2'));
					
					chart.draw(data, options);
				}
			</script>
			<script type="text/javascript">
				google.charts.load('current', {'packages':['corechart']});
				google.charts.setOnLoadCallback(drawChart);
				
				function drawChart() {
					
					var data = google.visualization.arrayToDataTable([
					['Degree','Number'],
					<?php
						
						$con = connect();
						$query="SELECT count(degree) as number,degree FROM user,lawyer WHERE user.u_id=lawyer.lawyer_id GROUP BY degree";
						$result=mysqli_query($con,$query);
						while($row=mysqli_fetch_array($result))
						{
							echo "['".$row["degree"]."',".$row["number"]."],";
						}
					?>
					]);
					var options = {
						'title':'Percentage of Registererd Lawyers Degree',
						'legend':'left',
						'is3D':true,
						
					};
					
					var chart = new google.visualization.PieChart(document.getElementById('total3'));
					
					chart.draw(data, options);
				}
			</script>
			<script type="text/javascript">
				google.charts.load('current', {'packages':['corechart']});
				google.charts.setOnLoadCallback(drawChart);
				
				function drawChart() {
					
					var data = google.visualization.arrayToDataTable([
					['Practise Length','Number'],
					<?php
						
						$con = connect();
						$query="SELECT count(practise_Length) as number,practise_Length FROM user,lawyer WHERE user.u_id=lawyer.lawyer_id GROUP BY practise_Length";
						$result=mysqli_query($con,$query);
						while($row=mysqli_fetch_array($result))
						{
							echo "['".$row["practise_Length"]."',".$row["number"]."],";
						}
					?>
					]);
					var options = {
						'title':'Percentage of Experience Lawyers ',
						'legend':'left',
						'is3D':true,
						
					};
					
					var chart = new google.visualization.PieChart(document.getElementById('total4'));
					
					chart.draw(data, options);
				}
			</script>
			<script type="text/javascript">
				google.charts.load('current', {'packages':['corechart']});
				google.charts.setOnLoadCallback(drawChart);
				
				function drawChart() {
					
					var data = google.visualization.arrayToDataTable([
					['Name','Number'],
					<?php
						
						$con = connect();
						$query="SELECT count(booking.lawyer_id) as number,user.first_name as name FROM booking,lawyer,user WHERE booking.lawyer_id=lawyer.lawyer_id and user.u_id=lawyer.lawyer_id GROUP BY booking.lawyer_id";
						$result=mysqli_query($con,$query);
						while($row=mysqli_fetch_array($result))
						{
							echo "['".$row["name"]."',".$row["number"]."],";
						}
					?>
					]);
					var options = {
						'title':'Percentage of Most Experience Lawyers ',
						'legend':'left',
						'is3D':true,
						
					};
					
					var chart = new google.visualization.PieChart(document.getElementById('total5'));
					
					chart.draw(data, options);
				}
			</script>
			
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
											<a class="nav-link cus-a" href="#">Home <span class="sr-only">(current)</span></a>
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
						<div class="sidebar-heading">Admin Panel</div>
						<div class="list-group list-group-flush">
							<a href="admin_dashboard.php" class="list-group-item list-group-item-action bg-light">Dashboard</a><!--this page-->
							<a href="admin_lawyer.php" class="list-group-item list-group-item-action bg-light">See lawyers</a><!--admin_lawyer page-->
							<a href="admin_user.php" class="list-group-item list-group-item-action bg-light">See Users</a><!--admin_user page-->
						</div>
					</div>
					<!-- /#sidebar-wrapper -->
					
					<section class="bookingrqst">
						<div class="containerr">
							<div class="span7">   
								<div class="widget stacked widget-table action-table">
									
									<div class="widget-header">
										<?php if(isset($_GET['done'])){
											echo "<div class='alert alert-danger alert-dismissible fade show'>
											<button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
											<strong>Welcome!</strong> You are login as Admin.
											</div>";
										}?>
									</div> <!-- /widget-header -->
									
									<div class="widget-content ">
										<div class="row">
											<div class="col-md-6">
												<div id="total" ></div>
											</div>
											<div class="col-md-6">
												<div id="total2" ></div>
											</div>
											<div class="col-md-6">
												<div id="total3" ></div>
											</div>
											<div class="col-md-6">
												<div id="total4" ></div>
											</div>
											<div class="col-md-6">
												<div id="total5" ></div>
											</div>
										</div>
										
									</div> <!-- /widget -->
								</div>
							</div>
						</section>
						
						
					</div>
					<!-- /#wrapper -->
					
					
					
					
					
					
					
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
			
			
			
		</body>
	</html>
	<?php
		
	}else 
	header('location:login.php?deactivate');
?>					