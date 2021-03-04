<?php

	function getBD(){
		$bdd = new PDO("mysql:host=localhost;dbname=wow;charset=utf8","root", "root");
		return $bdd;
	}
	
?>