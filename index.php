<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="en" lang="en-us">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1">
	<title>Best suite in Bingham!</title>
	<link rel="stylesheet" href="css/markdown.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<link rel="apple-touch-startup-image" href="futon.png">
	<link rel="icon" type="image/png" href="futon.png">
	<link rel="apple-touch-icon" type="image/png" href="futon.png">
	<link rel="icon" sizes="144x144" href="futon.png">
	<link rel="icon" sizes="192x192" href="futon.png">
	<link rel="shortcut icon" href="futon.png" type="image/png" />
	<meta name="theme-color" content="#778899">
	<meta name="description" content="The only place on the web to buy the best futon in Bingham!">
	<meta name="description" content="Get a futon in the best suite in Bingham!" />
	<meta name="author" content="Bingham 221 Girls!" />
	<meta name="copyright" content="&copy; Copyright 2015 to Present" />
	<link type="text/plain" rel="author" href="/humans.txt" />
</head>
<?php
	$servername = "localhost";
	$username = "root";
	$password = "your_password_goes_here";
	$dbname = "binghamAuction";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);

	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "SELECT MAX(bid) AS max FROM bids";
	$result = $conn->query($sql);
	$row  = $result->fetch_assoc();
	$max_bid = $row['max'];
	echo '<div style = "text-align: center" class="alert alert-info" role="alert">Current bid: $'.$max_bid.'</div>';

	if(isset($_POST['email']) && isset($_POST['bid'])){
		$email = $_POST['email'];
		$bid = $_POST['bid'];
		$ip = $_SERVER['HTTP_CF_CONNECTING_IP'];

		$sql = "INSERT INTO bids (ip, email, bid) VALUES ('".$ip."', '".$email."', '".$bid."')";

		if ($conn->query($sql) === TRUE) {
			echo '
			<div style = "text-align: center" class="alert alert-success" role="alert">Bid Submitted Sucessefully!</div>';
		} else {
			echo "Error: " . $sql . "<br>" . $conn->error;
		}

		$conn->close();
	}

?>
<body class = "markdown-body">
	<div class="container" id="container">
		<h1 class="text-center">RENT THE BINGHAM A21 FUTON</h1>
		<p class="text-center">Are you going to be sexiled, alone, or just want to change it up on Valentine's day 2016? If any of the former describes you then you should consider making a bid to come stay in the most dope, insane, sick suite in Bingham!</p>
		<div id="demoLightbox" class="lightbox hide fade"  tabindex="-1" role="dialog" aria-hidden="true">
				<div class='lightbox-content'>
					<img src="12647800_908398585934071_1222748780_n.jpg">
					<div class="lightbox-caption"><p>Your caption here</p></div>
				</div>
		</div>

		<div id="myCarousel" class="carousel slide center-block" data-ride="carousel" style = "width: 650px" style = "height 500px">
		        <!-- Carousel indicators -->
		        <ol class="carousel-indicators">
		            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		            <li data-target="#myCarousel" data-slide-to="1"></li>
								<li data-target="#myCarousel" data-slide-to="2"></li>
		        </ol>
		        <!-- Wrapper for carousel items -->
		        <div class="carousel-inner">
		            <div class="item active">
		                <img class = "img-responsive center-block" src="images/12647800_908398585934071_1222748780_n.jpg" alt="First Slide">
		            </div>
		            <div class="item">
		                <img class = "img-responsive center-block" src="images/12650481_908398602600736_1277352818_n.jpg" alt="Second Slide">
		            </div>
								<div class="item">
		                <img class = "img-responsive center-block" src="images/12637319_908873682553228_1007684711_o.jpg" alt="Third Slide">
		            </div>
		        </div>
		        <!-- Carousel controls -->
		        <a class="carousel-control left" href="#myCarousel" data-slide="prev">
		            <span class="glyphicon glyphicon-chevron-left"></span>
		        </a>
		        <a class="carousel-control right" href="#myCarousel" data-slide="next">
		            <span class="glyphicon glyphicon-chevron-right"></span>
		        </a>
		    </div>

	</div>
	<div style = "padding-top:20px">
		<div class = "container">
		<div class = "col-md-6 col-md-offset-3">
			<form class = "content center" method = "post" action = "">
		  	<fieldset class="form-group row">
					<div class = "col-md-6">
						<label for="exampleInputEmail1">Email address</label>
		    		<input type="text" class="form-control" id="email" placeholder="Yale.edu only!" name = "email">
					</div>
		  	</fieldset>
				<fieldset class="form-group row">
					<div class = "col-md-3">
	    			<label for="Price">Price</label>
	    			<input type="text" class="form-control" placeholder="Your Bid" name = "bid" id = "bid">
					</div>
	  		</fieldset>
				<input type="submit" value = "Submit" class="btn btn-primary"/>
			</form>

		</div>
	</div>
</div>
</body>

</html>
