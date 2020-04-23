<!DOCTYPE html>
<html lang="en">
<head>
	<title>One Tap System</title>
	<meta charset="UTF-8">
<meta name="description" content="Faculty Information Website">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i,800,800i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style1.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>

	<!-- Header section -->
	<header class="header-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-3">
					<div class="site-logo">
						<img src="img/cologo1.png"  height="150" width="400" alt="">
					</div>
					<div class="nav-switch">
						<i class="fa fa-bars"></i>
					</div>
				</div>
				<div class="col-lg-9 col-md-9" >
					
					<nav class="main-menu" style=" padding-left : 490px">
						<ul>
							<li><a href="index.html">Home</a></li>
							<li><a href="blog.html">News</a></li>
							<li><a href="contact.html">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page info -->
	<div class="page-info-section set-bg" data-setbg="img/page-bg/4.jpg">
		<div class="container">
			<div class="site-breadcrumb"><br>
				<span></span>
			</div>
		</div>
	</div>
	<!-- Page info end -->


	<!-- search section -->
	
	<!-- search section end -->



	<!-- Page-->
	<section class="contact-page spad pb-0">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="contact-form-warp">
						<div class="section-title text-white text-left">
							<h2>Appointment Request</h2>
							<?php 
							if($_GET["time"])
							{
								$plus =$_GET["time"] + 1;?> 
								<p>Request an appointment with <?php echo $_GET["factname"]; ?>
								at time <?php echo $_GET["time"] ; ?> to <?php echo $plus?> p.m.</p>
								</div>
							<?php
							}
							else{?>
								<br><font color = 'white' size = '5'> Message sent successfully.
								<?php
							}
							?>
						<form class="contact-form">
							<input type="text" name = "name" placeholder="Your Name">
							<input type="text" name = "email" placeholder="Your E-mail">
							<input type="text" name = "reason"placeholder="Reason to Meet">
							<textarea name = "message" placeholder="Message"></textarea>
							<button type = "submit" class="site-btn">Send Message</button>
						</form>
						<!-- PHP send request code through mail -->
		<?php 
			if(isset($_POST['name']) && isset($_POST['email'])&& isset($_POST['reason'])&& isset($_POST['message'])){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$to = "shreyaschincholkar@gmail.com";
			$subject  = "Contacting you";
			$body= "<html> 
					<body>
						<h2>Meeting you</h2>
						<p>".$_POST['reason']."<br>".$_POST['message']."</p>
					</body>
					</html>";

			//headers
			$headers = "From: ".$name." <".$email.">\r\n";
			$headers .= "Reply-To: ".$email."\r\n";
			$headers .= "MIME-Version: 1.0\r\n";
			$headers .= "Content-type: text/html; charset = utf-8";

			//send
			$send = mail($to, $subject, $body, $headers);

			if($send)
			{
				echo " Mail sent";
			}
			else{
				echo "<br><font color = 'white' size = '5'> Please fill all the details. Error to send the mail";
			}
			}
			
		?>

					</div>
				</div>
			</div>
			
		</div>
	</section>

	
	
	<footer class="footer-section spad pb-0">
		<div class="footer-top">
			<div class="footer-warp">
				<div class="row">
					<div class="widget-item">
						<h4>Contact Info</h4>
						<ul class="contact-list">
							<li>St. Vincent Palloti College of Engineering and Technology<br>Gavsi Manapur, Wardha Road, Nagpur, Maharashtra 441108</li>
							<li>07103 275 951</li>
							<li>www.stvincentngp.edu.in</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom">
			<div class="footer-warp">
				<ul class="footer-menu">
					<li><a href="blog.html">News</a></li>
					<li><a href="contact.html">Contact Us</a></li>
				</ul>
				<div class="copyright">
					One Tap System
			</div>
		</div>
	</footer> 
				
	
	<!-- footer section end -->


	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>


</body>
</html>