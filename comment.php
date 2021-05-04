<!DOCTYPE html>
<html>

	<head>
	
		<meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />
		<title>WoW Arena</title>
		<link rel="stylesheet" href="styles\style1.css"type="text/css" media="screen" />

		<?php

			function comment(String $commenta){
            	include ("bd.php");
           		$bdd = getBD();
           		$sql="insert into comment (commenta) values ('$commenta')";
            	$bdd->query($sql);
            	
			}
		
		if($_POST['c']!="Give your opinion (200 characters max)" && strlen($_POST['c']) > 3) { 
				
				$commenta=$_POST['c'];
				comment($commenta);
		?>

				<meta http-equiv="refresh" content="0; URL=import.php">
				<script> alert("The Commentary was added ! ") </script>

			<?php }

			else{ ?>
				<meta http-equiv="refresh" content="0; URL=import.php">
				<script> alert("The Commentary was not added.\nTry again...") </script>
				
			<?php }?>

	</head>
	
	
	<body>
	</body>

</html>