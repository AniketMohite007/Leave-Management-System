<?php
include('includes/config.php');
if(isset($_POST['sendotp']))
{
	$username=$_POST['username'];
	$phoneno=$_POST['phoneno'];

	$sql ="SELECT * FROM tblemployees where EmailId ='$username' AND Phonenumber ='$phoneno'";
	$query= mysqli_query($conn, $sql);
	$count = mysqli_num_rows($query);
	if($count > 0)
	{
		while ($row = mysqli_fetch_assoc($query)) {
		 echo "<script type='text/javascript'> document.location = 'verifyotp.php'; </script>";

		}

	} 
	else{
	  
	  echo "<script>alert('Invalid Details');</script>";

	}

}
?>

<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Info -->
	<meta charset="utf-8">
	<title>GPLeave</title>

	<!-- Site favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="vendors/images/logo3.png">
	<link rel="icon" type="image/png" sizes="32x32" href="vendors/images/logo3.png">
	<link rel="icon" type="image/png" sizes="16x16" href="vendors/images/logo3.png">

	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendors/styles/style.css">

	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-119386393-1');
	</script>
</head>
<body class="login-page">

	<div class="login-header box-shadow ">
		<div class="container-fluid d-flex justify-content-between align-items-center">
			<div class="brand-logo">
				<a href="index.php">
					<img src="vendors/images/logo-wn.png" alt="loading">
				</a>
			</div>
		</div>
	</div>

	<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
		<div class="container">		
			<div class="row align-items-center">
				<div class="col-md-6 col-lg-7" >
					<img src="vendors/images/logpgimg.png" alt="" width="1300px" height="1000px">
				</div>
				<div class="col-md-6 col-lg-5">
					<div class="login-box bg-white box-shadow border-radius-10">
						<div class="login-title">
						    
						    <div style="display: block; margin-left: auto;margin-right: auto; width: 50%;">
						    <img src="vendors/images/rpass.png" alt="" width=150px height=150px>
						    </div>
						        
							<h2 class="text-center text-primary">Trouble with logging in?</h2>
							<p>Enter your email address and  phone number for authentication</p>
						</div>
						<form name="signin" method="post">
						
							<div class="input-group custom">
								<input type="text" class="form-control form-control-lg" placeholder="Email ID" name="username" id="username">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class="icon-copy fa fa-envelope-o" aria-hidden="true"></i></span>
								</div>
							</div>
							
							<div class="input-group custom">
								<input type="number" class="form-control form-control-lg" placeholder="Phone No." name="phoneno" id="phoneno">
								<div class="input-group-append custom">
									<span class="input-group-text"><i class=" fa fa-phone " aria-hidden="true"></i></span>
								</div>
							</div>
						
							<div class="row">
								<div class="col-sm-12">
									<div class="input-group mb-0">
									   <input class="btn btn-primary btn-lg btn-block" name="sendotp" id="sendotp" type="submit" value="Check Details">
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- js -->
	<script src="vendors/scripts/core.js"></script>
	<script src="vendors/scripts/script.min.js"></script>
	<script src="vendors/scripts/process.js"></script>
	<script src="vendors/scripts/layout-settings.js"></script>
</body>
</html>