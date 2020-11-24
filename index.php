<?php
	ob_start();
	session_start();
	require("config.php");

	if(isset($_SESSION["blackMail"]) && isset($_SESSION["blackPass"])){
		$email = $_SESSION["blackMail"];
		$logged = TRUE;

		$row = mysqli_fetch_assoc(mysqli_query($connect,"SELECT * FROM members WHERE email = '$email' AND verified = 'YES' AND visible = 1"));
		$fullName = $row["fullName"];
		$country = $row["country"];
		$phoneNumber = $row["phoneNumber"];
		$sure2Expire = $row["sure2Expire"];
		$sure3Expire = $row["sure3Expire"];
		$sure10Expire = $row["sure10Expire"];
		$oddBlastExpire = $row["oddBlastExpire"];


		$today = date("Y-m-d");
		if($today > $sure2Expire){
			$query1 = mysqli_query($connect,"UPDATE members SET sure2 = 0 WHERE email = '$email'");
		}
		if($today > $sure3Expire){
			$query2 = mysqli_query($connect,"UPDATE members SET sure3 = 0 WHERE email = '$email'");
		}
		if($today > $sure10Expire){
			$query3 = mysqli_query($connect,"UPDATE members SET sure10 = 0 WHERE email = '$email'");
		}
		if($today > $oddBlastExpire){
			$query4 = mysqli_query($connect,"UPDATE members SET oddBlast = 0 WHERE email = '$email'");
		}

	}else{
		$logged = FALSE;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<title>Zari SMS</title>

	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300&display=swap" rel="stylesheet">

</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #fff !important;">
	    <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    	<ul class="navbar-nav mr-auto">
		      <li class="nav-item">
		        <a class="nav-link" href="#">Home</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">About Us</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Send SMS</a>
		      </li>

		      <li class="nav-item">
		        <a class="nav-link" href="#">APIs & Documentation</a>
		      </li>

		      <li class="nav-item">
		        <a class="nav-link" href="#">Contact Us</a>
		      </li>
		      
		      
	        </ul>
	        <div class="m-auto">
	            <?php
				 		if($logged){
				 	?>
				 	<a href="user/" class="btn" style="background: #654573; color: #fff;">Dashboard</a>
				 			<a href="logout.php" class="btn" style="background: #654573; color: #fff;">Logout</a>
				 			
				 	<?php
				 		}else{
				 	?>
				 		<a href="user/register.php" class="btn" style="background: #654573; color: #fff;">Register</a>
				 			<a href="user/login.php" class="btn" style="background: #654573; color: #fff;">Login</a>
				 	<?php
				 		}
				 	?>
	            	
				 		
	        	
	        	
	        </div>
		    
	    </div>
	    <a class="navbar-brand" href="#"><img src="image/Capture.PNG" /></a>
	  	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>
	</nav>





	<!-- Banner Area -->
	<section class="text-center banner-Area bg-ban overlay">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="banner-header-content">
						<h1 style="font-family: 'Comfortaa', cursive;">Smooth  Experince </h1>
					</div>
				</div>
			</div>
		</div>
	</section>



	<section>
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-lg-4 col-xl-4" style="position: relative; top: -40px;">
					<div class="text-center" style="align-content: center; background-color: #654573" id="divfst">
						<div style="padding-top: 20px;">
							<span style="background-color: #fff; padding: 3px; border-radius: 50px;"><img src="image/edit.png" style="padding: 3px;"></span>

								<br />

								<h5 style="margin-top: 5px; color: #fff;">Send SMS</h5>
								<br />
						</div>
					</div>
				</div>

				<div class="col-md-4 col-lg-4 col-xl-4" style="position: relative; top: -40px;">
					<div class="text-center" style="align-content: center; background-color: #654573" id="divfst">
						<div style="padding-top: 20px;">
							<span style=" padding: 3px; border-radius: 50px;"><img src="image/shopping-cart.png" style="padding: 3px;"></span>

								<br />

								<h5 style="margin-top: 5px; color: #fff;">Buy SMS Unit</h5>
								<br />
						</div>
					</div>
				</div>



				<div class="col-md-4 col-lg-4 col-xl-4" style="position: relative; top: -40px;">
					<div class="text-center" style="align-content: center; background-color: #654573">
						<div style="padding-top: 20px;">
							<span style=" padding: 3px; border-radius: 50px;"><img src="image/writing.png" style="padding: 3px;"></span>

								<br />

								<h5 style="margin-top: 5px; color: #fff;">Send SMS</h5>
								<br />
						</div>
					</div>
				</div>
			</div>


			<div class="row">
				<div class="col-md-4">

					<div style="background-color: #2E97F2; border-radius: 50%; width: 100px;">
						<img src="image/comment.png" style="padding: 15px;">
					</div>
					<h5 style="margin-top: 5px; color: #000 !important; font-weight: 800;">Message Us</h5>
				</div>
			</div>
		</div>
	</section>



	<!-- Andriod App Section -->
	<section style="margin-top: 40px; margin-bottom: 40px;">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-md-2 col-lg-8 offset-lg-2">
					<div class="row">
						<div class="col-lg-6 col-md-12 col-xl-6 col-sm-12">
							<img src="play_store.png" style="width: 400px;" id="store-o">
						</div>

						<div class="col-lg-6 col-md-12 col-xl-6 col-sm-12">
							<img src="image/phone-image.png" style="width: 200px; float: right;" id="store-oe">
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<!-- Why Choose Us -->
	<section id="wy_choose" style="padding: 20px;">
		<div class="container">
			<center><h5 style="margin-top: 5px; color: #654573; font-weight: 800; ">Why Choose Us</h5></center>
			<br /><br /><br />
			<div class="row" style="margin-bottom: 60px;">
				<div class="col-md-10 offset-md-1">
					<div class="row">
						<div class="col-md-6">
							<div id="card" class="caws">
								<span style="float: right; padding: "><img style="background-color: #858BA7; border-radius: 50px;" src="image/electric.png" /></span><br /><br />
								<h5 style="margin-top: 5px; color: #654573; font-weight: 800; ">Super Fast SMS Delivery</h5>
								<p style="margin-top: 5px; color: #654573; font-weight: 800; font-size: 11px; ">Get messages delivered in to recipirntsas fast as you can ever imagine</p>
							</div>
						</div>


						<div class="col-md-6">
							<div id="card">
								<span style="float: right; padding: "><img style="background-color: #858BA7; border-radius: 50px;" src="image/cash.png" /></span><br /><br />
								<h5 style="margin-top: 5px; color: #654573; font-weight: 800; ">Affordable SMS Pricing</h5>
								<p style="margin-top: 5px; color: #654573; font-weight: 800; font-size: 11px; ">1 = 1 SMS to all Networks in Nigeria</p>
							</div>
						</div>


					</div>





					<div class="row" style="margin-top: 30px;">
						<div class="col-md-6">
							<div id="card" class="caws">
								<span style="float: right; padding: "><img style="background-color: #858BA7; border-radius: 50px;" src="image/user.png" /></span><br /><br />
								<h5 style="margin-top: 5px; color: #654573; font-weight: 800; ">Phonebook Management</h5>
								<p style="margin-top: 5px; color: #654573; font-weight: 800; font-size: 11px; ">Create phone groups and add contacts which you can easily select and send messages</p>
							</div>
						</div>


						<div class="col-md-6">
							<div id="card">
								<span style="float: right; padding: "><img style="background-color: #858BA7; border-radius: 50px;" src="image/shield.png" /></span><br /><br />
								<h5 style="margin-top: 5px; color: #654573; font-weight: 800; ">Delivery to DND Members</h5>
								<p style="margin-top: 5px; color: #654573; font-weight: 800; font-size: 11px; ">Deliver your message to "Do Not Disturb" numbers at the same place</p>
							</div>
						</div>

						
					</div>










					<div class="row" style="margin-top: 30px;">
						<div class="col-md-6">
							<div id="card" class="caws">
								<span style="float: right; padding: "><img style="background-color: #858BA7; border-radius: 50px;" src="image/calculator.png" /></span><br /><br />
								<h5 style="margin-top: 5px; color: #654573; font-weight: 800; ">Schedule SMS</h5>
								<p style="margin-top: 5px; color: #654573; font-weight: 800; font-size: 11px; ">Compose a message and choose a time and date to send it</p>
							</div>
						</div>


						<div class="col-md-6">
							<div id="card">
								<span style="float: right; padding: "><img style="background-color: #858BA7; border-radius: 50px;" src="image/24-hours.png" /></span><br /><br />
								<h5 style="margin-top: 5px; color: #654573; font-weight: 800; ">24/7</h5>
								<p style="margin-top: 5px; color: #654573; font-weight: 800; font-size: 11px; ">We are always available to provide services to you</p>
							</div>
						</div>

						
					</div>
				</div>
			</div>

			<br /><br /><br /><br /><br />













			<div style="padding-top: 80px; text-align: center;">
				<center><h6 style="margin-top: 5px; color: #654573; font-weight: 800; line-height: 40px; ">No i Bulk SMS Service Provider In Nigeria To All Networks Including DND Numbers <br /> No Extra Cost! No Hidden Charges !</h6></center>

				<br />
				<center><h3 style="margin-top: 5px; color: #654573; font-weight: 800; ">Register Now</h3></center>
				<div class="row">
					<div class="col-md-10">
						
					</div>
					<div class="col-md-2">
						<img id="weaa" src="image/whatsapp-butt.png" style="float: right; position: relative; left: 110px; top: -50px;">
					</div>

				</div>


				<center><h3 style="padding-top: 20px; color: #000; font-weight: 900; ">Some Of Our Clients</h3></center>


				<div class="row" style="padding-top: 40px;">
					<div class="col-md-8 offset-md-2">
						<div class="row">
							<div class="col-md-4">
								<div id="carde" class="caws">
									<img src="image/e-r.png">
								</div>
							</div>
							<div class="col-md-4">
								<div id="carde" class="caws">
									<img src="image/q-re.png">
								</div>
							</div>
							<div class="col-md-4">
								<div id="carde">
									<img src="image/d-.png">
								</div>
							</div>
						</div>
					</div>
				</div>


				<div class="row" style="padding-top: 40px;">
				
					<div class="col-md-3">
						<div id="carde" class="caws">
							<img src="image/h-rf.png">
						</div>
					</div>
					<div class="col-md-3">
						<div id="carde" class="caws">
							<img src="image/e-r.png">
						</div>
					</div>
					<div class="col-md-3">
						<div id="carde" class="caws">
							<img src="image/q-re.png">
						</div>
					</div>
					

					<div class="col-md-3">
						<div id="carde">
							<img src="image/ds-rds.png" style="width: 50px;">
						</div>
					</div>
						
				</div>
			</div>
		</div>
	</section>
<br /><br /><br />

	<footer style="border-top: 2px solid #000; padding-top: 10px;">
		<div class="container">
			<div class="footert">
				<div class="row">
					<div class="col-md-2">
						<ul>
		                    <li><a class="ico-1" href="#"><img src="image/facebook.png" style="padding: 5px;" /></a></li>
		                    <li><a class="ico-2" href="#"><center><img src="image/instagram.png" style="padding: 3px; margin-bottom: 1px; position: relative; top: -5px;"></center></a></li>
		                    <li><a class="ico-3" href="#"><center><img src="image/twitter.png" style="padding: 3px; margin-bottom: 1px; position: relative; top: -5px;"></center></a></li>
		                </ul>
					</div>

						<div class="col-md-2"></div>
					<div class="col-md-8">
						<h3 style="padding-top: 20px; color: #000; font-weight: 900; font-size: 15px; float: right; ">Address:91, St, Finbbar's  Road Tel: 09038929480 Email: zariconnect@gmail.com</h3>
					</div>
				</div>
			</div>
		</div>
	</footer>

</body>
<script src="jquery.js"></script>
<script src="js/bootstrap.bundle.js"></script>
<script src="js/bootstrap.js"></script>
</html> 