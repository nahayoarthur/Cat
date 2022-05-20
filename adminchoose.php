<?php
session_start();
if(!isset($_SESSION['username']))
{
	header("location:index.php");
}else{
	?>
<!DOCTYPE html>
<html>
<head>
  	<title>Admin choose</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Welcome now you can choose</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Manager</h3>
						<form class="login-form">
	             <div class="form-group">
	            	<a href="locations.php"><button type="button" class="btn btn-primary rounded submit p-3 px-5">Manage locations</button></a>
	            </div>
	            <br><br><br>
	            <div class="form-group">
	            	<a href="cps.php"><button type="button" class="btn btn-primary rounded submit p-3 px-5">Manage Cps</button></a>
	            </div>
				<br><br>
	            <div class="form-group">
	            	<a href="usertable.php"><button type="button" class="btn btn-primary rounded submit p-3 px-5">Manage Users</button></a>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>


</html>
<?php }?>