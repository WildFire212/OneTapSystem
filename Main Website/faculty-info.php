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
								$sql2 ="select fact_name,designation,email,experience,publications,date_join,department,img from faculty where fact_id = ". $_GET["factid"];
								
								$result1  = $conn->query($sql);
								$result2  = $conn->query($sql2);
	?>

	<!-- Page info -->
	<div class="page-info-section set-bg" data-setbg="img/page-bg/2.jpg">
		<div class="container text-white">
			<div class="site-breadcrumb"><br>
				<a href="index.html">Home</a>
			</div>
				  <h2 align="center" style="padding-top : 50px;"><span><?php if($row = $result2->fetch_assoc()){ echo $row["fact_name"];}?></span></h2>
			</div>
	</div>
	<!-- Page info end -->


	<!-- search section -->
				
	<!-- search section end -->


	<!-- single course section -->
	<section class="single-course spad pb-0" style="padding-top : 0px;">
		<div class="container">
			
			<div class="row">
				<div class="col-lg-10 offset-lg-1 course-list">
					<div class="cl-item" >
			<img src="<?php echo "data:image/jpeg;base64,".base64_encode($row["img"])?>" alt="" class="course-preview">
						
								<font size = "6">
							
								<?php 
								//if($row = $result2->fetch_assoc())
								{
									echo "<br>Department of ".$row["department"]."<p>";
									echo "<font size = '6'>Information<font size = '5'><br>";
								  echo	 "Designation&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp       : ". $row["designation"]."<br>";
								  echo   "Email-ID&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp          : ".$row["email"]."<br>";
								  echo   "Experience&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp        : ".$row["experience"]." yrs<br>";
								  echo   "Publications&nbsp&nbsp&nbsp&nbsp&nbsp      : ".$row["publications"]."<br>";
								  
								  
								  echo   "Education&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp      : ";
								  $sql3 ="select distinct(education) from education where fact_id = ". $_GET["factid"];
								  $result3  = $conn->query($sql3);
								  while($row = $result3->fetch_assoc())
								  {echo $row["education"].",&nbsp"; }

								  echo   "<br>Research&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp      : ";
								  $sql4 ="select distinct(research) from research where fact_id = ". $_GET["factid"];
								  $result4  = $conn->query($sql4);
								  while($row = $result4->fetch_assoc())
								  {echo $row["research"].",&nbsp"; }

								  echo   "<br>Interests&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp      : ";
								  $sql5 ="select distinct(interest) from interest where fact_id = ". $_GET["factid"];
								  $result5  = $conn->query($sql5);
								  while($row = $result5->fetch_assoc())
								  {echo $row["interest"].",&nbsp"; }
								}?>
								</p>
							</div>
								
				</div>
			</div>
		</div>
	</section>

	<!-- Set style of the table-->
		<style>
			table {
			border-collapse: collapse;
			width: 100%;
			}

			th, td {
				border : 5px solid white; 
			text-align: left;
			padding: 16px;
			}
			
			td:nth-child(1){background-color: rgb(7, 147 ,188); color : white;}
			
			tr:nth-child(even){background-color: #f2f2f2}

			th {
			background-color: rgb(7, 147 ,188);;
			color: white;
			}
	</style>
	<!-- Time table  -->
	<section class="single-course spad pb-0" style="padding-top : 0px;">
		<div class="container">
			
			<div class="row">
				<div class="col-lg-10 offset-lg-1 course-list">
					<div class="cl-item" >
								<font size = 6> Faculty Time Table<br><font size = 4> 
								<table style="width:100%">
								<tr >
									<th>Time/Day</th>
									<th>Monday</th> 
									<th>Tuesday</th>
									<th>Wednesday</th>
									<th>Thursday</th>
									<th>Friday</th>
									<th>Saturday</th>
								</tr>
								
								
								<?php
									$sql6 = "use id13385926_miniproject;";
									$sql7  = "select * from timetable inner join faculty on timetable.fact_id = faculty.fact_id where timetable.fact_id = ".$_GET["factid"].";"; 
									$result6  = $conn->query($sql6);	
									$result7  = $conn->query($sql7);	
									
									while($row = $result7->fetch_assoc())
									{
										echo "<tr>";
										$actualTime = $row["time"];
										$plus  = $row["time"] + 1; 
										echo "<td>".$row["time"]." - ".$plus."</td>";
										if($row["mon_subs"])
										{
											echo "<td>".$row["mon_subs"]."</td>";
										}
										else{
											echo "<td><a class='site-btn' style ='padding: 10px 5px;min-width: 100px;background-color : rgb(86, 92, 88);'
											href=appointment.php?factname=".urlencode($row["fact_name"])."&email=".urlencode($row["email"])."&time=".urlencode($actualTime).">Book<br>Appointment</a></td>";
										}
										
										if($row["tue_subs"])
										{
											echo "<td>".$row["tue_subs"]."</td>";
										}
										else{
											echo "<td><a class='site-btn' style ='padding: 10px 5px;min-width: 100px;background-color : rgb(86, 92, 88);'
											href=appointment.php?factname=".urlencode($row["fact_name"])."&email=".urlencode($row["email"])."&time=".urlencode($actualTime).">Book<br>Appointment</a></td>";
										}
										if($row["wed_subs"])
										{
											echo "<td>".$row["wed_subs"]."</td>";
										}
										else{
											echo "<td><a class='site-btn' style ='padding: 10px 5px;min-width: 100px;background-color : rgb(86, 92, 88);'
											href=appointment.php?factname=".urlencode($row["fact_name"])."&email=".urlencode($row["email"])."&time=".urlencode($actualTime).">Book<br>Appointment</a></td>";
										}
										if($row["thu_subs"])
										{
											echo "<td>".$row["thu_subs"]."</td>";
										}
										else{
											echo "<td><a class='site-btn' style ='padding: 10px 5px;min-width: 100px;background-color : rgb(86, 92, 88);'
											href=appointment.php?factname=".urlencode($row["fact_name"])."&email=".urlencode($row["email"])."&time=".urlencode($actualTime).">Book<br>Appointment</a></td>";
										}
										if($row["fri_subs"])
										{
											echo "<td>".$row["fri_subs"]."</td>";
										}
										else{
											
											echo "<td><a class='site-btn' style ='padding: 10px 5px;min-width: 100px;background-color : rgb(86, 92, 88);'
											href=appointment.php?factname=".urlencode($row["fact_name"])."&email=".urlencode($row["email"])."&time=".urlencode($actualTime).">Book<br>Appointment</a></td>";
										}
										if($row["sat_subs"])
										{
											echo "<td>".$row["sat_subs"]."</td>";
										}
										else{
											echo "<td><a class='site-btn' style ='padding: 10px 5px;min-width: 100px;background-color : rgb(86, 92, 88);'
											href=appointment.php?factname=".urlencode($row["fact_name"])."&email=".urlencode($row["email"])."&time=".urlencode($actualTime).">Book<br>Appointment</a></td>";
											
										}
										echo "</tr>";
									}
								?>
								</table>
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
	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/circle-progress.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>