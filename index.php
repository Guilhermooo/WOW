<!DOCTYPE html>
<?php session_start(); ?>
<html>

	<head>

		<meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />
		<link rel="stylesheet" href="styles/style1.css"type="text/css" media="screen" />
		<title>WoW Arena</title>
		
	</head>


		<?php
			include ("bd.php");
			$bdd = getBD();
		?>
	<body>
		<div id="header">
			<a href="index.php"><img id="logo" src=images/logoW.png alt="WoW Arena"></a>
	
		<div id="text">
		
		<h3 class="bouton">
		<?php if(isset($_SESSION['utilisateur'])){
			echo "Welcome ". $_SESSION['utilisateur'][0]."";?> </h3>
			<h2 class="b"> •<a href="deconnexion.php" class="bouton">Log Out</a>
			•<a href="import.php" class="bouton">Import</a>
			•<a href="statistics.php" class="bouton">Statistics</a></h2>
		<?php }else{?>
			<h2 class="b"> •<a href="inscription.php" class="bouton">Sign Up</a>
			•<a href="connexion.php" class="bouton">Log In</a> </h2>
			<?php } ?>
		
		</div>
	
		</div>

	<div id="global">
		<h1 class="title">WoW Arena</h1>
			<h3 class="intro"> <u> Introduction </u> </h3>
			<p class="intro"> 
				Welcome to our WoW Arena website, here you can import your players versus players game history from the addon Reflex and analyse your results. </p>
				<p class="explications"> See what hold you back from getting your dream rating and optimize your gameplay with our advices on how to counter each class specialization.</p>
				<p class="explications"> Get defined statistics from your games to track your performances with your winrate, rating earned or loss and the compositions your are losing against.</p>
				<p class="explications"> Those statistics can be sorted the number of games you wish, your specialization and 2v2 or 3v3.</p>

			<h4 class="import">How to import : </h4>
			<p class="import"> After loging in, you may follow our tutorial on how to import your game history and analyse your results.</p>

		<p><a href="contact/contact.php"  class="bou">Contact us</a></p>

		</body>
	</div>

</html>