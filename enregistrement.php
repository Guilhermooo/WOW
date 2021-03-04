<html>

	<head>
	
		<meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />
		<title>WOWARENA</title>
		<link rel="stylesheet" href="styles\style1.css"type="text/css" media="screen" />

		<?php

			include ("bd.php");
           	$bdd = getBD();

			function enregistrer(String $username,String $mdp){
            	include ("bd.php");
           		$bdd = getBD();
            	$bdd->query("insert into user (username,password) values ('$username','$mdp')");
            	
			}
		
		if($_POST['u']!="" && $_POST['mdp1']!="" && $_POST['mdp2']!="" && $_POST['mdp1']==$_POST['mdp2']) { 

				$username=$_POST['u'];
				$mdp=$_POST['mdp1'];
				enregistrer($username,$mdp);

				?>

				<meta http-equiv="refresh" content="0; URL=index.php">

			<?php }

			else{ ?>

				<meta http-equiv="refresh" content="0; URL=inscription.php
				<?php 
					if($_POST['u']!=""){?>
					?u=<?php echo $_POST['u'];} 
				?>
				"> 

		<?php }

		$sql3->query("select username from `user` where username='$_POST['uc']'");
		$sql2->query("select password from `user` where username='$_POST['uc']'");

		if($sql3==''){?>

			<meta http-equiv="refresh" content="0; URL=inscription.php">
			<?php echo "Identifiant inexistant"	

		}

		if($sql2!=$_POST['mdpc']){?>		
			<meta http-equiv="refresh" content="0; URL=inscription.php">
			<?php echo "Mot de passe incorrect"	
			
		}
		if($sql3!='' && $sql2==$_POST['mdpc']){?>

			<meta http-equiv="refresh" content="0; URL=import.php">

		<?php } ?>

	</head>

</html>