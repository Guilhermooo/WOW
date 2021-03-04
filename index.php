<!Index php>
<html>
<?php include("BD.php");
	$bdd = getBD();
 ?>
 <head>
 <meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />
 <link rel="stylesheet" href="styles/WOW.css"
type="text/css" media="screen" />
		<title>WoW Arena</title>
 </head>
 <body>
	<h1 class="index">Bonjour, bienvenue sur le site WoW Arena</h1>
	<h2><a href="inscription.php">S'inscrire</a></h2>
	<h2><a href="Connection.php">Se connecter</a></h2>

	<h3> Comment ça marche ? </h3>
	<p class="Explications"> 
		Pour utiliser notre application il faut que vous créez un compte en utilisant le bouton "s'incrire" en haut à droite et ou que vous vous connectiez avec le bouton "se connecter" si vous possédez déjà un compte. </p>
		<p class="Explications"> Vous devez récupérer votre historique d'arènes en jeu sous forme .csv et l'importer dans notre application.</p>
		<p class="Explications"> Une fois votre historique importé, notre application va analyser vos parties afin de déterminer des statistiques pour que vous puissiez progresser.</p>
		<p class="Explications"> Les statistiques analysées en arêne côtée sont : votre pourcentage de victoire, votre total de points de côte sur les X dernières parties, les classes contre et avec lesquelles vous gagnez et perdez le plus. </p>

		<p class="Explications"> Ces statistiques peuvent être triée en fonction de votre spécialization et en 2v2, 3v3 ou pour les deux modes. 
	</p>

<p class="contact"><a href="contact/contact.html">Contact</a></p>
 </body>
</html>