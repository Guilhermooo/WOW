<!DOCTYPE html>
<html>

	<head>
	
		<meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />
		<title>WoW Arena</title>
		<link rel="stylesheet" href="styles\style1.css"type="text/css" media="screen" />
	
	</head>

	<body>
		<form action="enregistrement.php" method="post" autocomplete="off">
			<p>Username :<input type="text" name="uc" value="<?php echo $_GET['uc'];?>"/></p>
			<p>Mot de passe :<input type="password" name="mdpc" value=""/></p>
			<p><input type="submit" value="Envoyer"></p>
		</form>

	</body>

</html>