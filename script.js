function v2(){
	var monBouton = document.getElementById("monBouton1");
	if(document.getElementById("v2").style.display =="none"){
		document.getElementById("v3").style.display ="none";
		document.getElementById("v2").style.display ="block";
	} else{
		document.getElementById("v2").style.display ="none";
	}

}

function v3(){
	var monBouton = document.getElementById("monBouton2");
	if(document.getElementById("v3").style.display =="none"){
		document.getElementById("v2").style.display ="none";
		document.getElementById("v3").style.display ="block";
	} else{
		document.getElementById("v3").style.display ="none";
	}

}

