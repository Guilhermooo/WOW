<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN""http://www.w3.org/TR/html4/strict.dtd">
<?php session_start(); ?>
<html>

	<head>
	
		<meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />
		<title>WOW Arena</title>
		<link rel="stylesheet" href="styles\style1.css"type="text/css" media="screen" />

		<?php 
			include ("bd.php");
			$bdd = getBD();
			$mdp=$_POST['mdp'];
			$user=$_POST['user'];
			$sql="select password from user where username='$user'";
			$sql2="select username from user where password='$mdp'";
			$rep=$bdd->query($sql);
			$ligne= $rep ->fetch();
			$rep2=$bdd->query($sql2);
			$ligne2= $rep2 ->fetch();

			if($_POST['mdp']==""||$_POST['user']==""){
				echo "Username or Password empty"?>
				<meta http-equiv="refresh" content="1; URL=connexion.php">
			<?php 
			}else{
				if($ligne['password']==$_POST['mdp']){
					$_SESSION['utilisateur']=array($ligne2['username']);?>
					<meta http-equiv="refresh" content="0; URL=index.php">
				<?php }
				else{
					echo "Username or Password incorrect"?>
					<meta http-equiv="refresh" content="1; URL=connexion.php?username=
					<?php echo $_POST['user']?>">
				<?php  }?>
		
			

			<?php }?>

	</head>

	<body>
		
	

	</body>

</html>