<!DOCTYPE html>
<html>

	<head>
	
		<meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />
		<title>WoW Arena</title>
		<link rel="stylesheet" href="styles\style1.css"type="text/css" media="screen" />
	
	</head>

	<body>
		<?php
		$nomOrigine = $_FILES['monfichier']['name'];
		$elementsChemin = pathinfo($nomOrigine);
		$extensionFichier = $elementsChemin['extension'];
		$extensionsAutorisees = array("csv","Classeur OpenOffice.org XML 1.0");
		if (!(in_array($extensionFichier, $extensionsAutorisees))) {
		    echo "Le fichier n'a pas l'extension attendue";
		} else {    
		    $repertoireDestination = dirname(__FILE__)."/files/";
		    $nomDestination = "fichier_du_".date("YmdHis").".".$extensionFichier;

		    if (move_uploaded_file($_FILES["monfichier"]["tmp_name"], 
		                                     $repertoireDestination.$nomDestination)) {
		        echo "Le fichier temporaire ".$_FILES["monfichier"]["tmp_name"].
		                " a été déplacé vers ".$repertoireDestination.$nomDestination;
		    } else {
		        echo "Le fichier n'a pas été uploadé (trop gros ?) ou ".
		                "Le déplacement du fichier temporaire a échoué".
		                " vérifiez l'existence du répertoire ".$repertoireDestination;
		    }
		}
		?>
	</body>

</html>