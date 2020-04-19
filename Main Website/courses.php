<!DOCTYPE html>
<html lang="en">
<head>
	<title>One Tap System</title>
	<meta charset="UTF-8">
	<meta name="description" content="WebUni Education Template">
	<meta name="keywords" content="webuni, education, creative, html">
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
						<img src="img/cologo1.png" height="150" width="400" alt="">
					</div>
					<div class="nav-switch">
						<i class="fa fa-bars"></i>
					</div>
				</div>
				<div class="col-lg-9 col-md-9">
					
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
	<div class="page-info-section set-bg" data-setbg="img/page-bg/1.jpg">
		<div class="container text-white">
			<div class="site-breadcrumb"><br>
				<a href="index.html">Home</a>
				<span>Search Results for <?php echo $_POST["name"];?></span>
			</div>
			<h2 align="center" style="padding-top : 50px;"><span>Search Results</span></h2>
		</div>
	</div>
	<!-- Page info end -->


	<!-- search section -->
	
	<!-- search section end -->

	<?php 
								//echo $_POST["name"];
								$servername = "localhost";
								$username = "root";
								$password = "";
								
								// Create connection
								$conn = new mysqli($servername, $username, $password);
								
								// Check connection
								if ($conn->connect_error) { //if error is true then die and show the error 
									die("Connection failed: " . $conn->connect_error);
								} 
								
								
								//echo "Connected successfully";  //if no error 
								$sql ="use miniproject;";
								$sql2 ="select fact_id,fact_name,designation,department,img from faculty where fact_name like '%". $_POST["name"] . "%'";
								
								$result1  = $conn->query($sql);
								$result2  = $conn->query($sql2);
	?>

	<!-- Results section -->
	<section class="course-section spad pb-0">
			<div class="row course-items-area">
		                          
				<?php
				
				while($row = $result2->fetch_assoc())
				{
				?>
				<!-- TO DO -->
					<div class="mix col-lg-3 col-md-4 col-sm-6 photo">
						<div class="course-item">
						<?php
						$factid = $row["fact_id"];
						echo "<a href=faculty-info.php?factid=",urlencode($factid),">$factid";?>
							<div class="course-thumb set-bg" data-setbg="<?php echo "data:image/jpeg;base64,".base64_encode($row["img"])?>">
							
							</div>
							<div class="course-info">
								<div class="course-text">
									<h5>
									<?php 
									echo "".$row["fact_name"]." ";
									
									?>
									</h5>
									
									<div class="students"><?php echo $row["designation"]; ?></div>
								</div>
								<div  class="course-author">
								
									<p><?php echo $row["department"]; ?></p>
								</div>
							</div>

						</a>
						</div>
					</div>
				<?php
				}	
				?>
				<!-- course -->
				
				<!-- course -->
				
				<!-- course -->
			
				<!-- course -->
				
				<!-- course -->
				
				<!-- course -->
			
			</div>
			
		</div>
	</section>
	<!-- course section end -->


	<!-- banner section -->
	
	<!-- banner section end -->


	<!-- footer section -->
	<footer class="footer-section spad pb-0">
		<div class="footer-bottom">
			<div class="footer-warp">
				<ul class="footer-menu">
					<li><a href="#">Terms & Conditions</a></li>
					<li><a href="#">Register</a></li>
					<li><a href="#">Privacy</a></li>
				</ul>
				<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
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