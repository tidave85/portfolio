
<!doctype html>
<html class="no-js" lang="EN">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">

	<title>David Gagne Design</title>

	<meta name="description" content="davidgagnedesign web development design">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/home.css">
	<link rel="stylesheet" href="css/pages.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
</head>
<body>
	<!--[if lt IE 8]>
	<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="container-fluid">
		<div id="home" class="row">
			<div class="col-md-12">
				<div class="row">
					<div class="col-md-12">
						<header>
							<div class="line hrSmaller"></div>
							<div class="line subTitle hrSmall"></div>
							<div class="line subTitle hr"></div>
							<div class="title">
								<h1>DAVID GAGNE</h1>
							</div>
							<div class="subTitle">
								<h2>Design & Development</h2>
							</div>
							<div class="line subTitle hrSmall"></div>
							<div class="line hrSmaller"></div>
						</header>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<nav>
							<ul class="navbar navbar-default">
								<li><a href="#" id="services" onclick="getContent(this.id, event)">Services</a></li>
								<li><a href="#" id="clients" onclick="getContent(this.id, event)">Clients</a></li>
								<li><a href="#" id="contact" onclick="getContent(this.id, event)">Contact</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<div id="page_content"></div>
	</div>
	<script src="js/getContent.js"></script>
	<script src="js/process_contact.js"></script>
</body>
</html>