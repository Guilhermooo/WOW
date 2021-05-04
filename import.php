<!DOCTYPE html>
<?php session_start(); ?>
<html>

	<head>

		<meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />
		<link rel="stylesheet" href="styles/style1.css"type="text/css" media="screen" />
		<title>WoW Arena</title>

	</head>

	<body>
		<!-------------------------------------- Bd -------------------------------------->

		<?php
			include ("bd.php");
			$bdd = getBD();
		?>
		
		<!-------------------------------------- Bandeau -------------------------------------->	

		<div id="header">
		<a href="index.php"><img id="logo" src=images/logoW.png alt="WoW Arena"></a>
		<h1 class="title">WoW Arena</h1>
			<div id="text">
		
			<h3 class="bouton">
			<?php if(isset($_SESSION['utilisateur'])){
				echo "Welcome ". $_SESSION['utilisateur'][0];?> </h3>
				<h2 class="b"> •<a href="deconnexion.php" class="bouton">Log Out</a>
				•<a href="import.php" class="bouton">Import</a>
				•<a href="statistics.php" class="bouton">Statistics</a></h2>
			<?php }else{?>
				<h2 class="b"> •<a href="inscription.php" class="bouton">Sign Up</a>
				•<a href="connexion.php" class="bouton">Log In</a> </h2>
				<?php } ?>
		
			</div>
		</div>
		
		<!-------------------------------------- Import -------------------------------------->

		<div id="global">
		<?php if(isset($_SESSION['utilisateur'])){?>
		<h1 class="index"><u> Import : </u></h1>

		<form enctype="multipart/form-data" action="fileupload.php" method="post">

			<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
			<p> Import your file.txt </p> 
			<p> <input type="file" name="monfichier" /></p>
			<p><input type="submit" value="Submit"/></p>
		</form>
		
		<?php } ?>
	
		<!-------------------------------------- Tuto -------------------------------------->
		
		<h4 class="import"><u> Important note : </u></h4>
			<p class="import">You must have downloaded the latest version of the addon "Reflex" to import your data</p>

		<img src=images/TutoImport1.png alt="Tuto" width="700">
		<img src=images/TutoImport2.png alt="Tuto" width="700">
		<img src=images/TutoImport3.png alt="Tuto" width="700">
		<img src=images/TutoImport4.png alt="Tuto" width="700">		
		<p> <br /> </p>
		
		<!-------------------------------------- Commentary -------------------------------------->
		
		<script>
		window.onload = msg_textarea;
 
		function msg_textarea(){
			if (document.getElementById("co").value == ""){
				 document.getElementById("co").value += "Give your opinion (200 characters max)";
			}
		}
		 
		function clean_textarea()
		{
			if (document.getElementById("co").value == "Give your opinion (200 characters max)") {
				 document.getElementById("co").value = "";
			}
		}
		
		function MaxLengthTextarea(objettextarea,maxlength){
			if (objettextarea.value.length > maxlength) {
				objettextarea.value = objettextarea.value.substring(0, maxlength);
				alert('Your text must not exceed '+maxlength+' characters !');
		   }
		}

		</script>
		<?php if(isset($_SESSION['utilisateur'])){?>
		<h3> <u> To make a commentary : </u></h3>
		
		<form action="comment.php" method="post" autocomplete="off">
		
			<textarea rows="5" cols="30" name="c" id="co" onblur="javascript:msg_textarea()" onfocus="javascript:clean_textarea()" onkeyup="javascript:MaxLengthTextarea(this, 200);"></textarea>
			<p><input type="submit" value="Submit"/></p>

		<?php } ?>
		<p> <br /> </p>
		
		</div>
		
	</body>

</html>