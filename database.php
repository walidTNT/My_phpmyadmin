<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		 <link rel="stylesheet" href="css/page.css" />
        <title>dashboard</title>

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<meta name="description" content="Responsive Retina-Friendly Menu with different, size-dependent layouts" />
		<meta name="keywords" content="responsive menu, retina-ready, icon font, media queries, css3, transition, mobile" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<script src="js/modernizr.custom.js"></script>
    </head>

    <body>
		<div class="hg">MyPhpMyAdmin</div>
		<div class="icone"><img src="img/user25.png"></img> User</div> 
		<div class="g"></div>
		
		<div class="container">	
			<!-- Codrops top bar -->
		<!--	<div class="codrops-top clearfix">
				<a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/PageTransitions/"><span>Previous Demo</span></a>
				<span class="right"><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=14991"><span>Back to the Codrops Article</span></a></span>
			</div>
		-->	
		<div class="blocmenu">
		<div class="main clearfix">
				<nav id="menu" class="nav">					
					<ul>
						<li>
							<a href="dashboard.php">
								<span class="icon">
									<i aria-hidden="true" class="icon-home"></i>
								</span>
								<span>Home</span>
							</a>
						</li>
						<li>
							<a href="database.php">
								<span class="icon"> 
									<i aria-hidden="true" class="icon-services"></i>
								</span>
								<span>Base de données</span>
							</a>
						</li>
						<li>
							<a href="sql.php">
								<span class="icon">
									<i aria-hidden="true" class="icon-portfolio"></i>
								</span>
								<span>SQL</span>
							</a>
						</li>
						<li>
							<a href="importer.php">
								<span class="icon">
									<i aria-hidden="true" class="icon-blog"></i>
								</span>
								<span>Importer</span>
							</a>
						</li>
						<li>
							<a href="exporter.php">
								<span class="icon">
									<i aria-hidden="true" class="icon-team"></i>
								</span>
								<span>Exporter</span>
							</a>
						</li>
						<li>
							<a href="#">
								<span class="icon">
									<i aria-hidden="true" class="icon-contact"></i>
								</span>
								<span>Paramètres</span>
							</a>
						</li>							
					</ul>
				</nav>
			</div>
		</div><!-- /container -->
		</div>
		<div class="creationbdd">
			Créer une base de données
			<form action="#" method="post">
				<span>	<input type="text" name="login" size="32" /> <input type="submit" value="Créer" /> </span>
			</form>
		</div>
		<div class="listebdd">
			Liste base de données
		</div>
		<div class="blocbdd">
		
		</div>
		<div>
		<?php



try
	{
		$bdd = new PDO('mysql:host=localhost;dbname=myphpmyadmin;charset=utf8', 'root', '');

	}
	catch (Exception $e)
	{
		die('Erreur : '.$e->getMessage());
	}


	$response = $bdd->query('SELECT * FROM compte Where login="pwampe" ');
	?>
		</div>
		
    </body>
</html>
