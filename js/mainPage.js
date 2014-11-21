	function time()
		{$.get("time.php",function(data,status){
			$("#timearea").html(data);
		});}
	setInterval("time()",1000);

$(document).ready(function(){

	$('.modal.fade').load('html/regester.html');

	$("#logopic").hover(function(){
		$("#picname").fadeIn("slow");
	},
	function(){
		$("#picname").fadeOut("slow");
	});


	$(".nav.nav-pills.shCont").hover(function(){
		$(this).css("background-color:#b0c4de");
	},function(){
		$(this).css("background-color:#ffffff");
	});


	$("#login").click(function(){
		
	});

	$('.shCont').click(function(){
		//var page='../../html/'+$(this).data('page')+'.html';
		var page='html/'+$(this).data('page')+'.html';
		alert(page);
		$('.content').load(page);
	});




	//var c=document.getElementById("secondCanvas");
	var c=$('#secondCanvas').get(0);
	var ctx=c.getContext("2d");
	ctx.moveTo(0,10);
	ctx.lineTo(1100,10);
	ctx.stroke();


});