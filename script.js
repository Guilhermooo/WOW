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

var spe=["Unholy","Havoc","Feral","Balance","BeastMastery","Survival","Marksmanship","Fire","Arcane","Frost","Windwalker","Retribution","Shadow","Assassination","Subtlety","Elemental","Enhancement","Affliction","Destruction","Arms"];
$(document).ready(function() {
	for(var i=0;i<spe.length;i++){
		$(".im"+spe[i]).click(function(){
			console.log(".im"+spe[i]);
			$(".spe").css("display","none");
			$(".div"+spe[i]).toggle();
		});
	}

	$(".imFire").click(function(){
			console.log(".imFire");
			$(".spe").css("display","none");
			$(".divFire").toggle();
	});
	$(".imFrost").click(function(){
			console.log(".imFrost");
			$(".spe").css("display","none");
			$(".divFrost").toggle();
	});

	$(".imgUnholy").click(function(){
		$(".cont").css("display","none");
		$(".Unholy").toggle();
	});
	$(".imgHavoc").click(function(){
		$(".cont").css("display","none");
		$(".Havoc").toggle();
	});
	$(".imgFeral").click(function(){
		$(".cont").css("display","none");
		$(".Feral").toggle();
	});
	$(".imgBalance").click(function(){
		$(".cont").css("display","none");
		$(".Balance").toggle();
	});
	$(".imgBeatMastery").click(function(){
		$(".cont").css("display","none");
		$(".BeatMastery").toggle();
	});
	$(".imgSurvival").click(function(){
		$(".cont").css("display","none");
		$(".Survival").toggle();
	});
	$(".imgMarksmanship").click(function(){
		$(".cont").css("display","none");
		$(".Marksmanship").toggle();
	});
	$(".imgFire").click(function(){
		$(".cont").css("display","none");
		$(".Fire").toggle();
	});
	$(".imgArcane").click(function(){
		$(".cont").css("display","none");
		$(".Arcane").toggle();
	});
	$(".imgFrost").click(function(){
		$(".cont").css("display","none");
		$(".Frost").toggle();
	});
	$(".imgWindwalker").click(function(){
		$(".cont").css("display","none");
		$(".Windwalker").toggle();
	});
	$(".imgRetribution").click(function(){
		$(".cont").css("display","none");
		$(".Retribution").toggle();
	});
	$(".imgShadow").click(function(){
		$(".cont").css("display","none");
		$(".Shadow").toggle();
	});
	$(".imgAssassination").click(function(){
		$(".cont").css("display","none");
		$(".Assassination").toggle();
	});
	$(".imgSubtlety").click(function(){
		$(".cont").css("display","none");
		$(".Subtlety").toggle();
	});
	$(".imgElemental").click(function(){
		$(".cont").css("display","none");
		$(".Elemental").toggle();
	});
	$(".imgEnhancement").click(function(){
		$(".cont").css("display","none");
		$(".Enhancement").toggle();
	});
	$(".imgAffliction").click(function(){
		$(".cont").css("display","none");
		$(".Affliction").toggle();
	});
	$(".imgDestruction").click(function(){
		$(".cont").css("display","none");
		$(".Destruction").toggle();
	});
	$(".imgDemonology").click(function(){
		$(".cont").css("display","none");
		$(".Demonology").toggle();
	});
	$(".imgArms").click(function(){
		$(".cont").css("display","none");
		$(".Arms").toggle();
	});
});
