<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN""http://www.w3.org/TR/html4/strict.dtd">
<?php session_start(); ?>
<html>

	<head>
	
		<meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />
		<title>Osos</title>
		<link rel="stylesheet" href="styles\style1.css"type="text/css" media="screen" />

		<?php 
			include ("bd.php");
			$bdd = getBD();
			$mdp=$_POST['mdp'];
			$user=$_POST['user'];
			$sql="select password from clients where mail='$user'";
			$sql2="select username from clients where password='$mdp'";
			$rep=$bdd->query($sql);
			$ligne = $rep ->fetch();
			$rep2=$bdd->query($sql2);
			$ligne2 = $rep2 ->fetch();

			if($_POST['mdp']==""||$_POST['user']==""){
				echo "Username et/ou Mot de passe vide"?>
				<meta http-equiv="refresh" content="0; URL=connexion.php">
			<?php 
			} else{ 
				if($ligne['mdp']==$_POST['mdp']){
					$_SESSION['utilisateur']=array();
					array_push($_SESSION['utilisateur'],$ligne2['username']);?>
					<meta http-equiv="refresh" content="0; URL=index.php">
				<?php }
				else{
					echo "Username ou Mot de passe incorrect"?>
					<meta http-equiv="refresh" content="1; URL=connexion.php?username=
					<?php echo $_POST['user']?>">
				<?php  }?>
		
			

			<?php }?>

	</head>

	<body>
		
	

	</body>

</html>