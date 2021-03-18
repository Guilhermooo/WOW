<!DOCTYPE html>
<?php session_start(); ?>

<html>
	<head>
		<meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />
		<link rel="stylesheet" href="../styles/style1.css" type="text/css"media="screen" />
		<title>WoW Arena</title>
	</head>
	
	<body>
	<div id="header">
	<div id="logo">
 <a href="index.php"><img src=../images/HunterSurvival.png></a>
	</div>
</div>

	<div id="global">
		<h1 class="index">WoW Arena</h1>

		<?php if(isset($_SESSION['utilisateur'])){
				echo "Welcome ". $_SESSION['utilisateur'][0];
				echo "<br />";?>
				<a href="../deconnexion.php">Log Out</a>
				<?php echo '<br />'?>
				<a href="../import.php" >Import</a>
		<?php }else{?>
				<h2><a href="../inscription.php">Sign Up</a></h2>
				<?php echo '<br/>'?>
				<h2><a href="../connexion.php">Log In</a></h2>
		<?php } ?>
				
		<p class="contact"> Here are the directions to contact us if you need help : </p> <br/>
		
		<p>
			<ul>
				<li> Miramond Guillaume : </li>
				<li> Guilhermo38@gmail.com </li> <br />
				<li> Bellot Arthur : </li>
				<li> Arthurbe2801@gmail.com </li> <br />
				<li> Gheude Loan : </li>
				<li> Loangheude@gmail.com </li> <br/> 
				</ul>
		</p> <br /> 
		
		<p class="contact"> Do not hesitate to make suggestions in order to improve our site. </p>
		
		<p> <em> Thank you for your visit </em> </p> <br />
		
		<a href="../index.php">
		Retour
		</a> <br />
		
		<p> <br /> </p>
		</div>
	</body>
</html>
