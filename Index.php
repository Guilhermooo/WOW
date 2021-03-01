<!Index php>
<html>
<?php include("BD.php");
	$bdd = getBD();
 ?>
 <head>
 <meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />
 <link rel="stylesheet" href="styles/montest0.css"
type="text/css" media="screen" />
		<title>WoW Arena</title>
 </head>
 <body>
	<h1 class="index">Bonjour, bienvenue sur le site WoW Arena</h1>
	<h2><a href="Nouveau.php">S'inscrire</h2>
	<h2><a href="Nouveau.php">Se connecter</h2>
<table border="1">
	<tr>
		<th>Identifiant</th>
		<th>Nom</th>
		<th>Quantité Disponible</th>
		<th>Prix en euros</th>
		<th>Image</th>
	</tr>
	<tr>
		<?php $rep = $bdd->query('select * from articles where id_art=1'); 
 while ($ligne = $rep ->fetch()) {	?>
		<td> <?php echo $ligne['id_art']."<br />\n"; ?> </td>
		<!--<a href="articles/Article.php"><?php echo $ligne['nom']."<br />\n";?></a>-->
		<td><a href="articles/article.php?id_art=<?php echo $ligne['id_art']?>"><? echo $ligne['nom'] ?></td>
		<td><?php echo $ligne['quantite']."<br />\n";?></td>
		<td><?php echo $ligne['prix']."<br />\n";?></td>
		<td><img src="<?php echo $ligne["url_photo"];?>"alt= "bug" width="320px"/></td>	
	<?php $rep ->closeCursor(); } ?> 
	</tr>

<?php $rep ->closeCursor(); } ?> 
	</tr>
</table>
<p class="contact"><a href="contact/contact.html">Contact</a></p>
 </body>
</html>