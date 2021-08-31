<?php 
$url_usd = "https://apiv2.bitcoinaverage.com/indices/global/ticker/BTCUSD";
$json_usd = json_decode(file_get_contents($url_usd));
$BTC_USD = $json_usd->last;
$BTC_USD_dGAIN = $json_usd->changes->percent->day;

$url_eur = "https://apiv2.bitcoinaverage.com/indices/global/ticker/BTCEUR";
$json_eur = json_decode(file_get_contents($url_eur));
$BTC_EUR = $json_eur->last;
$BTC_EUR_dGAIN = $json_eur->changes->percent->day; 

//die(var_dump($json_usd));?>

<!DOCTYPE html>
<html>
<head>
	<title>Bitcoin Brokers</title>  
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="SHORTCUT ICON" href="/favicon.ico" />
	<!-- <link rel="stylesheet" type="text/css" href="/core/css/337-bootstrap.min.css">
	<script src="/core/js/321-jquery.min.js"></script>
	<script src="/core/js/337-bootstrap.min.js"></script> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style type="text/css">
	<?php if(!isset($_GET['light'])) { $_LIGHT=''; ?>
		/* BASE STRUCTURE FOR NIGHT-MODE */
		html, body { 
			min-width:100%;
			min-height:100%;
			height: 100%;
			background:#121212;
			color:#989898;
			font-family:Sans-Serif;
			display:flex;
			flex-direction:column;
		}
		body a img {
			opacity:0.6;
		}
		body a img:hover {
			opacity:1.0;
		}
		#wrapper {
			display:block;
			margin:0 auto;
			margin-top:20px;
			min-width:95%;
			max-width:95%;
			min-height:90%;
			border:1px solid #010101;
			background:#232124;
		}
		a {
			color:#989898;
			text-decoration:none;
		}
		a:hover {
			color:white!important;
		}
		/* TOP NAVIGATION */
		.navbar .navbar-nav {
			display:inline-block;
			vertical-align:top;
			text-align:center;
			text-transform:uppercase;
			font-weight:bold;
			color:rgba(255,255,255,0.3);
			background:transparent;
		}
		.navbar-inverse {
			background:linear-gradient(#232124,#121212);
			border:1px solid black;
			border-top:none;
			border-bottom:1px solid rgba(255,255,255, 0.1);
			box-shadow: 0 4px 4px -2px rgba(0,0,0,0.6);
			min-width:95%;
			max-width:95%;
			margin:0 auto;
		}
		.navbar .navbar-nav li {
			text-align:center;
		}
		.navbar-brand {
			display:inline-flex;
			text-transform:uppercase;
			font-weight:bold;
			color:rgba(255,255,255,0.3);
		}
		.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover {
			background:linear-gradient(#111,#000);
		}
		/* CONTAINER */
		.container {
			margin-bottom:10%!important;
		}
		.container pre {
			background:#323232;
			color:#999;
		}
		/* FOOTER */
		#footer {
			vertical-align:middle;
			max-width:94.9%;
			min-width:94.9%;
			border-top:1px solid rgba(255,255,255, 0.1);
			box-shadow:0 -5px 5px -5px rgba(0,0,0,0.6);
			position:fixed; bottom:0;
			margin:0 auto;
			padding-top:10px;
			padding-bottom:10px;
			background:linear-gradient(#121212,#232124);
		}

		/* BOOTSTRAP ADJUSTMENTS FOR MOBILE */
		@media (max-width: 600px) and (orientation:portrait) {
			img.banner {
				margin-top:20px;
				min-width:100%;
			}
			.container {
				margin-bottom:20px!important;
			}

			#footer {
				vertical-align:middle;
				min-width:100%;
				border-top:1px solid rgba(255,255,255, 0.1);
				box-shadow:0 -5px 5px -5px rgba(0,0,0,0.6);
				position:relative; bottom:0;
				margin:0 auto;
				padding-top:10px;
				padding-bottom:10px;
				background:linear-gradient(#121212,#232124);
			}
			#footer div {
				width:100%;
				text-align:center!important;
				border:1px solid black;
				padding:7px;
			}
			#footer div:first-child {
				border-top:none;
			}
			#footer div:last-child {
				border-bottom:none;
			}
		}





	<?php } else { $_LIGHT='-light'; ?>







		/* BASE STRUCTURE FOR LIGHT-MODE */
		html, body { 
			min-width:100%;
			min-height:100%;
			height: 100%;
			background:#fff;
			color:#212121;
			font-family:Sans-Serif;
			display:flex;
			flex-direction:column;
		}
		body a img {
			opacity:0.6;
		}
		body a img:hover {
			opacity:1.0;
		}
		#wrapper {
			display:block;
			margin:0 auto;
			margin-top:20px;
			min-width:95%;
			max-width:95%;
			min-height:100%;
			border:1px solid #010101;
			background-color:#DCDEDB;
		}
		a, hr {
			color:#303030!important;
			text-decoration:none;
		}
		a:hover {
			color:black!important;
		}

		/* TOP NAVIGATION */
		.navbar .navbar-nav {
			display:inline-block;
			vertical-align:top;
			text-align:center;
			text-transform:uppercase;
			font-weight:bold;
			color:rgba(255,255,255,0.3);
			background:transparent;
		}
		.navbar-inverse {
			background:linear-gradient(#efe,#E8E6E6);
			border:1px solid black;
			border-top:none;
			border-bottom:1px solid rgba(255,255,255, 0.1);
			box-shadow: 0 4px 4px -2px rgba(0,0,0,0.6);
			min-width:95%;
			max-width:95%;
			margin:0 auto;
		}
		.navbar .navbar-nav li {
			text-align:center;
		}
		.navbar-brand {
			display:inline-flex;
			text-transform:uppercase;
			font-weight:bold;
			color:rgba(255,255,255,0.3);
		}
		.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:focus, .navbar-inverse .navbar-nav>.active>a:hover {
			background:linear-gradient(#999,#efe);
		}
		span.iconBar {
			color:black;
			font-weight:bold;
			font-size:large;
		}

		/* CONTAINER */
		.container {
			margin-bottom:10%!important;
			background-color:#DCDEDB;
		}
		.container pre {
			background:#323232;
			color:#999;
		}

		/* FOOTER */
		#footer {
			vertical-align:middle;
			max-width:94.9%;
			min-width:94.9%;
			border-top:1px solid rgba(255,255,255, 0.1);
			box-shadow:0 -5px 5px -5px rgba(0,0,0,0.6);
			position:fixed; bottom:0;
			margin:0 auto;
			padding-top:10px;
			padding-bottom:10px;
			background:linear-gradient(#E8E6E6,#EFE);
		}

		/* BOOTSTRAP ADJUSTMENTS FOR MOBILE */
		@media (max-width: 600px) and (orientation:portrait) {
			img.banner {
				margin-top:20px;
				min-width:100%;
			}
			.container {
				margin-bottom:20px!important;
			}

			#footer {
				vertical-align:middle;
				min-width:100%;
				border-top:1px solid rgba(255,255,255, 0.1);
				box-shadow:0 -5px 5px -5px rgba(0,0,0,0.6);
				position:relative; bottom:0;
				margin:0 auto;
				padding-top:10px;
				padding-bottom:10px;
				background:linear-gradient(#E8E6E6,#EFE);
			}
			#footer div {
				width:100%;
				text-align:center!important;
				border:1px solid black;
				padding:7px;
			}
			#footer div:first-child {
				border-top:none;
			}
			#footer div:last-child {
				border-bottom:none;
			}
		}
	<?php } ?>
	</style>
</head>



<body>
<div id="wrapper">
	<?php $about=''; $services=''; $consulting=''; $contact=''; $index=''; 
	if ($_SERVER['REQUEST_URI'] == '/about.php') 		$about='class="active"';
	elseif ($_SERVER['REQUEST_URI'] == '/services.php') 	$services='class="active"';
	elseif ($_SERVER['REQUEST_URI'] == '/education.php') $consulting='class="active"';
	elseif ($_SERVER['REQUEST_URI'] == '/contact.php') 	$contact='class="active"';
	else $index='class="active"';
	?>
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#topNavbar">
				<span class="iconBar">☰</span>               
			</button>
				<a class="navbar-brand" href="/">
					<img src='/core/img/bitcoin-brokers-shadow.png' style='align:left;' width='27' height='25' />
				</a>
			</div>
			<div class="collapse navbar-collapse" id="topNavbar">
				<ul class="nav navbar-nav">
					<li <?=$index;?>><a href="/index.php">Index</a></li>
					<li <?=$about;?>><a href="/about.php">About</a></li>
					<li <?=$services;?>><a href="/services.php">Services</a></li>
					<li <?=$consulting;?>><a href="/education.php">Consulting</a></li>
					<li <?=$contact;?>><a href="/contact.php">Contact</a></li>

					<!--DROP DOWN, FOR WHEN READY
					<li <?=$index;?>>
						<a class="dropdown-toggle" data-toggle="dropdown" href="/index.php">Home
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Page 1-1</a></li>
							<li><a href="#">Page 1-2</a></li>
							<li><a href="#">Page 1-3</a></li>
						</ul>
					</li>
					<li <?=$about;?>>
						<a class="dropdown-toggle" data-toggle="dropdown" href="/about.php">About
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Page 1-1</a></li>
							<li><a href="#">Page 1-2</a></li>
							<li><a href="#">Page 1-3</a></li>
						</ul>
					</li>
					<li <?=$services;?>>
						<a class="dropdown-toggle" data-toggle="dropdown" href="/services.php">Services
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Page 1-1</a></li>
							<li><a href="#">Page 1-2</a></li>
							<li><a href="#">Page 1-3</a></li>
						</ul>
					</li>
					<li <?=$consulting;?>>
						<a class="dropdown-toggle" data-toggle="dropdown" href="/education.php">Consulting
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Page 1-1</a></li>
							<li><a href="#">Page 1-2</a></li>
							<li><a href="#">Page 1-3</a></li>
						</ul>
					</li>
					<li <?=$contact;?>>
						<a class="dropdown-toggle" data-toggle="dropdown" href="/contact.php">Contact
						<span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Page 1-1</a></li>
							<li><a href="#">Page 1-2</a></li>
							<li><a href="#">Page 1-3</a></li>
						</ul>
					</li>
					END DROP DOWN-->
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#"><span class="glyphicon glyphicon-user"></span> Register</a></li>
					<li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
				</ul>
			</div>
		</div>
	</nav><br /><br />
	<center>
		<img class='banner' src='/core/img/banner<?=$_LIGHT;?>.jpg' width='100%' style="padding-bottom:5px; border-bottom:1px solid rgba(221,190,117,0.2);" />
	</center><br />