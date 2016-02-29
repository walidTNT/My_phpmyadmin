<?php
// On démarre la session AVANT d'écrire du code HTML
session_start();
 
// On s'amuse à créer quelques variables de session dans $_SESSION
$_SESSION['mdp'] = $_POST['psw'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
		 <link rel="stylesheet" href="css/login.css" />
        <title>myphpmyadmin</title>
		
    </head>

    <body>
		<div class="titre">MyPhpMyAdmin</div>
<!--		<div> Fond pour l'image </div>  -->
		<div class="formulaire">
			<form method="post" action="auth.php" >
				<p>	<input type="text" name="login" size="32" /> </p>
				<p>	<input type="password" name="psw"  size="32"/> </p>
				<p> <input type="submit" value="Valider" /> </p>
			</form>		
		</div>
		<div class="img"> <img src="img/elephant3.png"></img> </div>
		<footer>
		<ul id="menu_horizontal">
			<li><a>Copyright © 2003 - 2015 </a></li>
			<li><a href="https://www.phpmyadmin.net/">Site officiel</a></li>
			<li><a href="http://localhost/phpmyadmin/doc/html/index.html">Documentation</a></li>
			<li><a href="https://www.phpmyadmin.net/team/">phpMyAdmin contributors </a></li>
			<li><a href="https://www.phpmyadmin.net/license/">License </a></li>
			<li><a href="https://www.phpmyadmin.net/donate/">Donate</a></li>
			<li><a href="https://www.phpmyadmin.net/search/">Search</a></li>
			<li><a href="http://localhost/phpmyadmin/changelog.php">Liste des changements</a></li>
		</ul>	
		</footer>
    </body>
</html>