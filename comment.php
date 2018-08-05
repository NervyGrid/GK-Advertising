<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>G.K Advertisement</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/owl.transitions.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/lightbox.css">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/preloader.css">
		<link rel="stylesheet" href="css/image.css">
		<link rel="stylesheet" href="css/icon.css">
		<link rel="stylesheet" href="css/style2.css">
		<link rel="stylesheet" href="css/responsive.css">
		<link href="img/logo3.png" rel="shortcut icon" type="image/x-icon" />
		<style>
			table 
			{
			    font-family: arial, sans-serif;
			    border-collapse: collapse;
			    width: 100%;
			}

			td, th {
			    border: 1px solid #dddddd;
			    text-align: left;
			    padding: 8px;
			}

			tr:nth-child(even) {
			    background-color: #dddddd;
			}
		</style>
	</head>
	<body id="top">
		<div id="preloader"></div>
        <header id="navigation" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<h2>
						<img src="img/logo3.png">&nbsp;<font face="Calibri">GK Advertising</font>
					</h2>
                </div>
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav menu">
                        <li><a href="adin.php">Prev</a></li>
                    </ul>
                </nav>
            </div>
        </header>
	<div class="wrapper">
		<section id="banner">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="block">
							<h1>G.K Advertising</h1>
							<h2><i>Welcome to Admin Page</i></h2>
						</div>
					</div>
				</div>
			</div>
			<div class="scrolldown">
	            <a id="scroll" href="#features" class="scroll"></a>
	        </div>
		</section>
		<section id="features">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title">
							<h2>FeedBack from our happiest clients</h2>
							<p>
<?php
include("config.php");
$con=mysql_query("select * from contact");
while($arr=mysql_fetch_array($con))
  {
echo "
<table>
  <tr>
    <th>Name</th>
    <th>Mobile No</th>
    <th>Email</th>
    <th>Message</th>
  </tr>
  <tr>
    <td>".$arr['name']."</td>
    <td>".$arr['contact']."</td>
    <td>".$arr['email']."</td>
    <td>".$arr['comment']."</td>
  </tr>
 </table>";
}
?>
</p>
	</section>
			<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="block">
							<img src="img/logo3.png" alt=""><h2><font face="Calibri" style="color: white">GK Advertising</font></h2>
							<p>All rights reserved by Nervy Grid</p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	</div>
		<script src="js/jquery-1.11.3.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&amp;sensor=false"></script>
		<script src="js/waypoints.min.js"></script>
		<script src="js/lightbox.js"></script>
		<script src="js/jquery.counterup.min.js"></script>
		<script src="js/owl.carousel.min.js"></script>
		<script src="js/html5lightbox.js"></script>
		<script src="js/jquery.mixitup.js"></script>
		<script src="js/wow.min.js"></script>
		<script src="js/jquery.scrollUp.js"></script>
		<script src="js/jquery.sticky.js"></script>
		<script src="js/jquery.nav.js"></script>
		<script src="js/main.js"></script>
		<script src="js/prelod.js"></script>
	</body>
</html>