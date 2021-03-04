<html>

	<head>
	
		<meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />
		<title>WOWARENA</title>
		<link rel="stylesheet" href="styles\style1.css"type="text/css" media="screen" />
	
	</head>

	<body>
		<form action="enregistrement.php" method="post" autocomplete="off">
			<p>Username :<input type="text" name="u" value="<?php echo $_GET['u'];?>"/></p>
			<p>Mot de passe :<input type="password" name="mdp1" value=""/></p>
			<p>Confirmer votre mot de passe :<input type="password" name="mdp2" value=""/></p>
			<p><input type="submit" value="Envoyer"></p>
		</form>

	</body>

</html>