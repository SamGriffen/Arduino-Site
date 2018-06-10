<?php

// Get the page that the user is looking for. I know, big long conditional chain. BUT it works
if(isset($_GET["page"])){
	if(in_array($_GET["page"], ["home", "tutorial_select", "reference", "tools", "not_found", "about"])){
		$page = $_GET["page"].".php";
	}
	else if($_GET["page"] == "tutorial"){
		if(isset($_GET["tutorial"])){
			if(in_array($_GET["tutorial"], ["intro", "parts", "circuits", "breadboards", "setup", "blink", "variables","functions", "extraforexperts", "blinkled", "knightrider", "input", "ifelse"])){
				$page = "tutorialsecs/".$_GET["tutorial"].".php";
			}
			else{
				header("Location: index.php?page=tutorial_select");
			}
		}
		else {
			header("Location: index.php?page=tutorial_select");
		}
	}
	else {
		header("Location: index.php?page=not_found");
	}
}
else {
	header("Location: index.php?page=home");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Learn Arduino</title>
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Julius+Sans+One" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
	<link rel="icon" type="image/png" href="img/logo/favicon.png">
</head>
<body>
	<nav id="header">
		<div id="logo">
			<a href="index.php?page=home"><img src="img/logo/logo.png" alt="Arduino Logo" id="logoimg"/></a>
		</div>
		<div id="hamburger">
			<div id="bar-cont">
				<span></span>
				<span></span>
				<span></span>
				<span></span>
			</div>
		</div>
		<ul id="menu">
			<li class="menu-item"><a href="index.php?page=home">Home</a></li>
			<li class="menu-item"><a href="index.php?page=tutorial_select">Tutorial</a></li>
			<li class="menu-item"><a href="index.php?page=reference">Reference</a></li>
			<li class="menu-item"><a href="index.php?page=tools">Tools</a></li>
			<li class="menu-item"><a href="index.php?page=about">About</a></li>
		</ul>
	</nav>
	<div id="main-wrapper">
		<?php
		// Include the page that the user is looking for
		include("pages/$page");
		?>
	</div>
	<div id="toTop"></div>
	<!-- Include all the neccessary scripts for the page -->
	<!-- jQuery because getting elements becomes a million times easier. Also, has a lot of useful event listeners that JS doesn't -->
	<script type="text/javascript" src="js/jquery-3.1.0.min.js"></script>
	<!-- Modernizr for SVG images -->
	<script type="text/javascript" src="js/modernizr.js"></script>
	<!-- Hammer.js for swipe on the slider -->
	<script type="text/javascript" src="http://hammerjs.github.io/dist/hammer.min.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</body>
</html>