<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
$_SESSION['nom'] = 'Dupont';
?>

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
		<div class="labelnew"><img src="img/labelnew25.png"></img></div>
		<div class="newVersion">Une nouvelle version de phpMyAdmin est disponible et vous devriez songer à une mise à niveau. La version la plus récente est 4.5.2, publiée le 2015-11-23.</div>
		<div class="triangle"><img src="img/triangle25.png"></img></div>
		<div class="configFile">Votre fichier de configuration fait référence à l'utilisateur «root » sans mot de passe, ce qui correspond à la valeur par défaut de MySQL.
			 Votre serveur MySQL est donc ouvert aux intrusions, et vous devriez corriger ce problème de sécurité.
		</div>	 
		<div class="serveurbdd"><strong>Serveur de base de données</strong>
			<ul>
				<li>Serveur : mysql wampserver (127.0.0.1 via TCP/IP)</li>
				<li>Type de serveur : MySQL</li>
				<li>Version du serveur : 5.6.17 - MySQL Community Server (GPL)</li>
				<li>Version du protocole : 10</li>
				<li>Utilisateur : root@localhost<li>
				<li>Jeu de caractères du serveur : UTF-8 Unicode (utf8)</li>
			</ul>
		</div>
		<div class="phpmyadmin"><strong>phpMyAdmin</strong>
			<ul>
				<li>Version : 4.1.14, dernière version stable : 4.5.2</li>
				<li>Documentation</li>
				<li>Wiki</li>
				<li>Site officiel</li>
				<li>Contribuer</li>
				<li>Obtenir de l'aide</li>
				<li>Liste des changements</li>
			</ul>
		</div>
		<div class="serveurweb"><strong>Serveur web</strong>
			<ul>
				<li>Apache/2.4.9 (Win64) PHP/5.5.12</li>
				<li>Version du client de base de données : libmysql - mysqlnd 5.0.11-dev - 20120503 - $Id: bf9ad53b11c9a57efdb1057292d73b928b8c5c77 $</li>
				<li>Extension PHP : mysqli</li>
			</ul>
		</div>
		<div class="paramge"><strong>Paramètres généraux</strong>
			<ul>
				<li>Langue - Langage : </li>
				<li>Thème : </li>
				<li>Taille du texte : </li>
				<li>Plus de paramètres </li>
		</div>
		
	<div class="listebdd">	
		<?php
		// Utilisation sans mysql_list_dbs()
		$link = mysql_connect('localhost', 'root', '');
		$res = mysql_query("SHOW DATABASES");

		while ($row = mysql_fetch_assoc($res)) {
			 echo $row['Database']."<br />";
		}
		?>
	</div>	
<!--		
// Utilisation sans mysql_list_dbs()
/*$link = $bdd = new PDO('mysql:host=localhost;dbname=myphpmyadmin;charset=utf8', 'root', '');
$res = mysql_query("SHOW DATABASES");

while ($row = mysql_fetch_assoc($res)) {
     echo $row['Database'] . "\n";
}
	*/ -->	
    </body>
</html>
