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
			<a href="index.php"><img id="logo" src=../images/logoW.png alt="WoW Arena"></a>
	
		<div id="text">
		<h3 class="bouton">
			<?php if(isset($_SESSION['utilisateur'])){
				echo "Welcome ". $_SESSION['utilisateur'][0]."";?> </h3>
				<h1 class="bouton"> •<a href="../deconnexion.php">Log Out</a>
				•<a href="../import.php">Import</a>
				•<a href="../statistics.php" >Statistics</a></h1>
			<?php }else{?>
				<h1 class="bouton"> •<a href="../inscription.php">Sign Up</a>
				•<a href="../connexion.php">Log In</a> </h1>
				<?php } ?>
		
		</div>
	
		</div>
	<div id="global">
		<h1 class="title">WoW Arena</h1>
				
		<p class="contact"> Here are the directions to contact us if you need help : </p>
		
		<p>
				<li> Miramond Guillaume : </li>
				<p class="mail"> Guilhermo38@gmail.com </p> <br />
				<li> Bellot Arthur : </li>
				<p class="mail"> Arthurbe2801@gmail.com </p> <br />
				<li> Gheude Loan : </li>
				<p class="mail"> Loan.gheude@gmail.com </p> <br/> 
		</p> 
		
		<p class="contact"> Do not hesitate to make suggestions in order to improve our site. </p>
		
		<p> <em> Thank you for your visit </em> </p>
		
		<p class="bouton"> <a href="../index.php"> Return </a> </p>
		
		</div>
	</body>
</html>
