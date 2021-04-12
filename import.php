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
		</div>
		
		<div id="global">
		<h1 class="title">WoW Arena</h1>
		<h1 class="index"><u> Import : </u></h1>

		<form enctype="multipart/form-data" action="fileupload.php" method="post">

			<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
			<p> Import your csv <input type="file" name="monfichier" /></p>
			<p><input type="submit" /></p>
		</form>

		<img src=images/TutoImport1.png alt="Tuto" width="500">
		<img src=images/TutoImport2.png alt="Tuto" width="500">
		<img src=images/TutoImport3.png alt="Tuto" width="500">
		<img src=images/TutoImport4.png alt="Tuto" width="500">
	</br>
		<a href="index.php" class="bou">
		Return
		</a> 
		
		<p> <br /> </p>
		</div>
		
	</body>

</html>