<?php
error_reporting(0);
session_start();
session_destroy();

// Establish PHP Data Object(PDO) Connection
$dsn = 'mysql:host=localhost;dbname=sms-project';
$username = 'root';
$password = '';

try {
	$dbh = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
	echo 'Connection failed: ' . $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>UTTHAAN || HOME</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<style>
		.navbar {
			background-color: #c39d72 !important;
			color: white;
			height: 85px !important;
		}

		.navbar-brand {
			font-size: 35px;
			margin-left: 30px;
		}

		.social-icons {
			list-style: none;
			padding: 0;
		}

		.social-icons li {
			display: inline-block;
			margin-right: 10px;
		}

		.social-icons li:last-child {
			margin-right: 0;
		}

		.social-icons a {
			color: #343a40;
			font-size: 20px;
		}

		.welcome {
			padding: 6em 0 7em;
			text-align: center;
		}

		.welcome-gridsinfo {
			border-top: 2px solid#DCDCDC;
			padding: 20px 0;
			text-align: center;
		}

		.welcome-grid:nth-child(4) {
			border-right: none;
		}

		i.glyphicon.glyphicon-pencil {
			font-size: 3em;
		}

		.container {
			padding-right: 15px;
			padding-left: 15px;
			margin-right: auto;
			margin-left: auto;
		}

		@media (min-width: 768px) {
			.container {
				width: 750px;
			}
		}

		@media (min-width: 992px) {
			.container {
				width: 970px;
			}
		}

		@media (min-width: 1200px) {
			.container {
				width: 1170px;
			}
		}

		.container-fluid {
			padding-right: 15px;
			padding-left: 15px;
			margin-right: auto;
			margin-left: auto;
		}

		.slider {
			padding: 15.5% 0 0;
		}

		.rslides h3 {
			margin-top: 1em;
		}

		.image {
			margin-left: 0px !important;
			margin-right: 0px !important;
			width: 100%;
			height: 675px;
		}

		.contain {
			position: relative;
			text-align: center;
			color: white;
		}

		.overlay-text {
			position: absolute;
			top: 40%;
			left: 26%;
			transform: translate(-50%, -50%);
			text-align: justify;
			color: white;
		}

		.btn-student-login {
			color: white;
			background-color: #4070f4;
			border-color: #4070f4;
			padding: 12px 12px 12px 12px;
		}

		.btn-student-login:hover {
			background-color: #c39d72;
			border-color: #c39d72;
		}

		.welcome-grid {
			width: 50%;
			float: left;
			margin-top: 2em;
		}

		.welcome-grid:nth-child(2) {
			border: none;
		}

		.welcome-grid:nth-child(4) {
			border-right: none;
		}

		.welcome-grid h2 {
			padding: 14px 0 4px;
		}

		.testimonials {
			background-image: url("images/front_mid.jpg");
			opacity: 0.65;
			background-size: cover;
			background-position: center;
			color: #fff;
			padding: 20px;
		}

		#foot{
			background-color: black;
			margin: 0% !important;
			margin-right: 0% !important;;
		}
		.footer {
			background-color: grey;
			color: #fff;
			padding: 20px 0;
		}
	</style>
</head>

<body>
	<!-- Navbar -->
	<nav class="navbar navbar-expand-lg navbar-dark">
		<a class="navbar-brand" href="index.php">UTTHAAN</a>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item" style="font-size:130%;">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item" style="font-size:130%;">
					<a class="nav-link" href="#about">About</a>
				</li>
				<li class="nav-item" style="font-size:130%;">
					<a class="nav-link" href="contact.php">Contact</a>
				</li>
				<li class="nav-item" style="font-size:130%;">
					<a class="nav-link" href="login.php">Admin</a>
				</li>
				<li class="nav-item" style="font-size:130%;">
					<a class="nav-link" href="login.php">Student</a>
				</li>
			</ul>
		</div>
	</nav>

	<!-- Main Content -->
	<div class="position-relative">
		<img src="images/front_image.jpg" class="image" alt="Student Management System" />
		<div class="overlay-text">
			<h1>Student Management System</h1>
			<p>Registered Students can Login Here</p>
			<a href="login.php"><i class="btn btn-student-login">Student Login</i></a>
		</div>
	</div>
	<div class="welcome" id="about">
		<h2 class="card-title">About Us</h2>
		<p class="card-text" style="font-size: 20px; padding-left: 20px; padding-right: 20px">
			The Student Management System project is a comprehensive web application developed using web technologies
			such as HTML5, CSS3,JavaScript, Bootstrap, PHP, MySQL, and jQuery. This robust system efficiently manages
			student-related tasks, including enrollment, attendance tracking, grading, and communication between
			students, faculty, and administrators. Leveraging the power of HTML5 and CSS3, the system offers a modern
			and user-friendly interface, ensuring seamless navigation and visual appeal. JavaScript and jQuery enhance
			interactivity, enabling dynamic updates and smooth user interactions. Bootstrap ensures responsiveness,
			making the system accessible across various devices and screen sizes. PHP and MySQL serve as the backbone,
			handling data storage, retrieval, and processing securely.
		</p>
		<p class="card-text" style="font-size: 20px; padding-left: 20px; padding-right: 20px">
			Student Management Systems help educational institutions streamline their operations, improve efficiency,
			enhance communication, and provide better support for students' academic journeys. Additionally, these
			systems can contribute to data security, accuracy, and compliance with regulatory requirements.
		</p>
	</div>

	<!-- Testinomials -->
	<div class="testimonials">
		<div class="container">
			<h2 style="text-align: center">Public Notices</h2>
			<marquee style="height: 350px" direction="up" onmouseover="this.stop();" onmouseout="this.start();">
				<?php
				$sql = "SELECT * FROM tblpublicnotice";
				$query = $dbh->prepare($sql);
				$query->execute();
				$results = $query->fetchAll(PDO::FETCH_OBJ);
				if ($query->rowCount() > 0) {
					foreach ($results as $row) {
						?>
						<div>
							<?php echo htmlentities($row->noticetitle); ?>(<?php echo htmlentities($row->creationdate); ?>)
						</div>
						<hr />
						<br />
						<?php
					}
				}
				?>
			</marquee>
		</div>
	</div>

	<!-- Footer -->
	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col">
					<p style="color: white">
						&copy; 2024 Student Management System. All rights reserved.
					</p>
				</div>
				<div class="col">
					<ul class="social-icons" style="text-align: right;">
						<li>
							<a href="#"><i class="fab fa-google"></i></a>
						</li>
						<li>
							<a href="#"><i class="fab fa-facebook"></i></a>
						</li>
						<li>
							<a href="#"><i class="fab fa-twitter"></i></a>
						</li>
						<li>
							<a href="#"><i class="fab fa-instagram"></i></a>
						</li>
						<li>
							<a href="#"><i class="fab fa-linkedin"></i></a>
						</li>
						<li>
							<a href="#"><i class="fab fa-pinterest"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

	<!-- Bootstrap JS and dependencies -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>