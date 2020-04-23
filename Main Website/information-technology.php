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
						<img src="img/cologo1.png"  height="150" width="400"  alt="">
					</div>
					<div class="nav-switch">
						<i class="fa fa-bars"></i>
					</div>
				</div>
				<div class="col-lg-9 col-md-9">
					
					<nav class="main-menu"style=" padding-left : 490px">
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
	<div class="page-info-section set-bg" data-setbg="img/page-bg/2.jpg">
		<div class="container text-white" >
			<div class="site-breadcrumb"><br>
				<a href="index.html">Home</a>
			</div>
            <h2 align="center" style="padding-top : 50px;"><span>Department of Information Technology</span></h2>
		</div>
	</div>
	<!-- Page info end -->


	<!-- search section -->
				
	<!-- search section end -->


	<!-- single course section -->
	<section class="single-course spad pb-0" style="padding-top : 0px;">
		<div class="container">
			
			<img src="img/courses/single.jpg" alt="" class="course-preview">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 course-list">
					<div class="cl-item">
						<h4>Vision</h4>
						<p>To be a center of excellence in the domain of Information Technology to nurture future professionals..</p>
					</div>
					<div class="cl-item">
						<h4>Mission</h4>
						<p>• To impart computing knowledge in the field of information technology and digital tools.
• To provide an effective learning environment for developing future leaders with professional ethos and attitude for lifelong learning.</p>
					</div>
					<div class="cl-item">
						<h4>HOD's Message</h4>
						<p>The Department of Information Technology is one of the pioneering department of the institution established in the year 2014. The Information Technology branch was started in 2008 with an intake of 60 students. It is endowed with an experienced team of faculty members having excellent academic records and proficiency. Excellent infrastructure, state-of-the-art computer labs with the latest advances in technology and comprehensive study material makes the department a class apart. The department regularly takes various initiatives; like Personality Development, Soft Skill sessions and employment oriented technical and management sessions for providing our students a clear and decisive edge in employability. Final year batches of 2011, 2014, 2015, 2016, 2017 and 2018 made us proud with 100 % result.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- single course section end -->

	<?php 
								//echo $_POST["name"];
								$servername = "localhost";
								$username = "id13385926_miniproject123";
								$password = "xYSC|_duW4Ug3)>p";
								
								// Create connection
								$conn = new mysqli($servername, $username, $password);
								
								// Check connection
								if ($conn->connect_error) { //if error is true then die and show the error 
									die("Connection failed: " . $conn->connect_error);
								} 
								
								
								//echo "Connected successfully";  //if no error 
								$sql ="use id13385926_miniproject;";
								$sql2 ="select fact_id,fact_name,designation,img from faculty where department = 'Computer Engineering'";
								
								$result1  = $conn->query($sql);
								$result2  = $conn->query($sql2);
	?>

	<!-- Page -->
	<section class="realated-courses spad">
		<div class="course-warp">
			<h2 class="rc-title">Meet the Faculty</h2>
			<div class="rc-slider owl-carousel">
				<!-- TO DO  -->
				<?php
				while($row = $result2->fetch_assoc())
				{?>
				<?php
						$factid = $row["fact_id"];
						echo "<a href=faculty-info.php?factid=",urlencode($factid),">";
				?>
				<div class="course-item">
					<div class="course-thumb set-bg" data-setbg="<?php echo "data:image/jpeg;base64,".base64_encode($row["img"])?>">
						
					</div>
					<div class="course-info">
						<div class="course-text">
							<h5><?php echo $row["fact_name"]?></h5>
							
							<div class="students"><?php echo $row["designation"]?></div>
						</div>
						<div class="course-author">
							
							<p></span></p>
						</div>
					</div>
				</div>
				</a>
				<?php
				}?>
			
				<!-- course -->
			</div>
		</div>
	</section>
	<!-- Page end -->


	<!-- banner section -->
	
	<!-- banner section end -->


	<!-- footer section -->
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