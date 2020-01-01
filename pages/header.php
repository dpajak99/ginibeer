<?php
	require_once('php_scripts/page.php');
	require_once('php_scripts/pageSettings.php');
	$pageTitle = new Page;
	@$pageTitle -> setPageTitle($_GET['page']);
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>
			<?php echo $pageTitle -> getPageTitle(); ?>
		</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="icon" type="image/ico" href="img/favicon.ico" >
		
		<!-- Bootstrap CSS -->
		<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
		<!-- Moje CSSki -->
		<link href="css/main.css" rel="stylesheet">
	</head>
	<body>
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#pageTop" id="logo"><img src="img/logo.png" class="logo" /><!--Tworzymy z pasją...--></a>
			<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navBar" aria-controls="navBar" aria-expanded="false" aria-label="Toggle navigation">
			  Menu
			  <i class="fa fa-bars"></i>
			</button>
			<div class="collapse navbar-collapse" id="navBar">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="<?php echo $server."index.php?page=Start"; ?>">Strona główna</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="<?php echo $server."index.php?page=Informacje"; ?>">O nas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="<?php echo $server."index.php?page=Oferta"; ?>">Oferta</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="<?php echo $server."index.php?page=Kontakt"; ?>">Kontakt</a>
					</li>
				</ul>
			</div>
		</div>
    </nav>
	
