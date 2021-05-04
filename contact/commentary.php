<!DOCTYPE html>
<?php session_start(); ?>
<html>

	<head>

		<meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />
		<link rel="stylesheet" href="../styles/style1.css"type="text/css" media="screen" />
		<title>WoW Arena</title>
		
	</head>

	<body>
		<!-------------------------------------- Bandeau -------------------------------------->

		<div id="header">
			<a href="../index.php"><img id="logo" src=../images/logoW.png alt="WoW Arena"></a>
		<h1 class="title">WoW Arena</h1>
		<div id="text">
		
		<h3 class="bouton">
		<?php if(isset($_SESSION['utilisateur'])){
			echo "Welcome ". $_SESSION['utilisateur'][0];?> </h3>
			<h2 class="b"> •<a href="../deconnexion.php" class="bouton">Log Out</a>
			•<a href="../import.php" class="bouton">Import</a>
			•<a href="../statistics.php" class="bouton">Statistics</a></h2>
		<?php }else{?>
			<h2 class="b"> •<a href="../inscription.php" class="bouton">Sign Up</a>
			•<a href="../connexion.php" class="bouton">Log In</a> </h2>
			<?php } ?>
		
		</div>
		</div>

		<!-------------------------------------- Commentaires -------------------------------------->
		<div id="global">
		
		<h2 class="intro"> <u> Commentary : </u> </h2>
		
		<p class="explications"> 
		
		<?php
            $num_id = $_GET['num_id'];
            include ("../bd.php");
            $bdd = getBD();

            $rep = $bdd->query('SELECT * FROM comment');

            while($ligne = $rep -> fetch ()){
				echo "<li>" .$ligne['commenta'].' '. '<br />'.'<br />' ."</li>"; 
            } 
            $rep -> closeCursor();
		?>
		</p>
	
		<br />
			
		<p><a href="contact.php" class="bou">Contact us</a></p>

		</div>
	</body>

</html>