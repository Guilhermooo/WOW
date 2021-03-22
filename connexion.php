<!DOCTYPE html>
<html>

	<head>
	
		<meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />
		<title>WoW Arena</title>
		<link rel="stylesheet" href="styles\style1.css"type="text/css" media="screen" />
	
	</head>

	<body>
		<div id="header">
 <a href="index.php"><img id="logo" src=images/logoW.png alt="WoW Arena"></a>
</div>
		<form action="connecter.php" method="post" autocomplete="off">
			<p>Username :<input type="text" name="user" value="<?php echo $_GET['user'];?>"/></p>
			<p>Mot de passe :<input type="password" name="mdp" value=""/></p>
			<p><input type="submit" value="Envoyer"></p>
		</form>

	</body>

</html>