<!DOCTYPE html>
<html>

	<head>

		<meta http-equiv="Content-Type"content="text/html; charset=UTF-8" />
		<link rel="stylesheet" href="styles/style1.css"type="text/css" media="screen" />
		<title>WoW Arena</title>

	</head>

	<body>
		<div id="header">
		<a href="index.php"><img id="logo" src=images/logoW.png alt="WoW Arena"></a>
		<h1 class="title">WoW Arena</h1>
		</div>
		
		<div id="global">
		<h1 class="index"><u> Import : </u></h1>

		<form enctype="multipart/form-data" action="fileupload.php" method="post">

			<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
			<p> Import your .txt <input type="file" name="monfichier" /></p>
			<p><input type="submit" value="Submit"/></p>
		</form>

		<h4 class="import">Important note : </h4>
			<p class="import">You must have downloaded the latest version of the addon "Reflex" to import your data</p>

		<img src=images/TutoImport1.png alt="Tuto" width="700">
		<img src=images/TutoImport2.png alt="Tuto" width="700">
		<img src=images/TutoImport3.png alt="Tuto" width="700">
		<img src=images/TutoImport4.png alt="Tuto" width="700">
		</br>		
		<p> <br /> </p>
		</div>
		
	</body>

</html>