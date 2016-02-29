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
	while ($donnees = $response->fetch())
	{
		//var_dump($donnees);
?>
		<?php
				if ($donnees["mdp"] == $_POST['psw'])
				{
				/*	if($donnees["login"] == $_POST['login'])
					{ */
						header('Location: dashboard.php');	
				/*	}
				*/					
				}
				else
				{			
					echo "Bonjour ".$_POST['login'].", ton mot de passe est incorrect.";
					/*
					header('Location: login.php');
					
					<script  type="text/javascript">	
						alert('Hello world!');
					</script>
					*/
				}
		?>
		<?php
	}

	$response->closeCursor();

//echo "Ton login est ".$_POST['pseudo']." et ton mot de passe ".$_POST['pass']." et ton profil ".$_POST['profil'];

?> 