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
            <h2 align="center" style="padding-top : 50px;"><span>Department of Computer Engineering</span></h2>
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
						<p>To develop globally competent computing community with the ability to make constructive contributions to society.</p>
					</div>
					<div class="cl-item">
						<h4>Mission</h4>
						<p>To develop technocrats with capabilities to address the challenges in computer engineering by providing 
						strong academics and wide industry exposure.</p>
					</div>
					<div class="cl-item">
						<h4>HOD's Message</h4>
						<p>Computer Engineering blends together computer science and Electrical Engineering to further advancements in digital technology, computer networking and computer systems. In turn computer engineers use their extensive knowledge of hardware and software design and computer programming to make computing platforms and applications more efficient and effective. Seamlessly integrating the latest innovations, computer engineers develop new computer hardware, design and implement software applications, and enhance the capabilities of networks and communication systems
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