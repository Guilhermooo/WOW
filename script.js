function v2(){
	$("#v2").toggle();
	$("#v3").css("display","none");
}

function v3(){
	$("#v3").toggle();
	$("#v2").css("display","none");
}


$(document).ready(function() {	
	$(".imgs").click(function(){
			$(this).next().toggle();
	});
	
	$(".limg").click(function(){
			$(this).next().toggle();
	});

});
