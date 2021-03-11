<!DOCTYPE html>
<?php session_start(); ?>
<html>

	<head>

		<meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />
		<link rel="stylesheet" href="styles/style1.css"type="text/css" media="screen" />
		<title>WoW Arena</title>
		
	</head>

	<body>

		<?php
			include ("bd.php");
			$bdd = getBD();
		?>

		<h1 class="index">WoW Arena</h1>

		<?php if(isset($_SESSION['utilisateur'])){
				echo "Welcome ". $_SESSION['utilisateur'][0];
				echo "<br />";?>
				<a href="deconnexion.php" > Log Out</a>
				<?php echo '<br />'?>
				<a href="import.php" > Import</a>
			<?php }else{?>
					<h2><a href="inscription.php" >Sign Up</a></h2>
					<?php echo '<br />'?>
					<h2><a href="connexion.php" > Log In</a></h2>
				<?php } ?>

		<h3>Intro</h3>
		<p class="Intro"> 
			Welcome to our WoW Arena website, here you can import your players versus players game history from the addon Reflex and analyse your results.
		</p>
		</br>
			<p class="Explications"> See what hold you back from getting your dream rating and optimize your gameplay with our advices on how to counter each class specialization.</p>
		</br>
			<p class="Explications"> Get defined statistics from your games to track your performances with your winrate, rating earned or loss and the compositions your are losing against.</p>
		</br>
			<p class="Explications"> Those statistics can be sorted the number of games you wish, your specialization and 2v2 or 3v3.</p>

		<h4>How to import</h4>
		<p class="Import"> After loging in, you may follow our tutorial on how to import your game history and analyse your results.

	<p class="contact"><a href="contact/contact.html">Contact us</a></p>

	</body>

</html>