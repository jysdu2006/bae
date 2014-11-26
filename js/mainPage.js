	function time()
		{$.get("time.php",function(data,status){
			$("#timearea").html(data);
		});}
	setInterval("time()",1000);


	

$(document).ready(function(){

	//$('.modal.fade').load('html/regester.html');

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

	$('.shCont').click(function(){
		//var page='../../html/'+$(this).data('page')+'.html';
		var page='html/'+$(this).data('page')+'.html';
		$('.content').load(page);
	});




	//var c=document.getElementById("secondCanvas");
	var c=$('#secondCanvas').get(0);
	var ctx=c.getContext("2d");
	ctx.moveTo(0,10);
	ctx.lineTo(1100,10);
	ctx.stroke();

	$("#loginAction").click(function(){
		$name=$("#username").val();
		$passwd=$("#passwd").val();
		$.post("test.php",{name:$name,passwd:$passwd},function(data,status){
			if(data=='登录成功'){
				$("#reges").after('<i class="fa fa-user">'+$name+'</i>');
				$("#login").fadeOut("slow");
				$("#reges").fadeOut("slow");
				$('#myModal').modal("hide");
			}
		});
	});

	$("#regesAction").click(function(){
		$name=$("#username").val();
		$passwd=$("#passwd").val();
		$passwdB=$("#passwdB").val();
		if($passwd!=$passwdB){
			alert("输入的两个密码不一致，重新输入！");
			$("passwdB").val()="";
		}
		else{
			$.post("test1.php",{name:$name,passwd:$passwd},function(data,status){
			if(data=='注册成功'){
				$("#myModal").modal('hide');
				$("#reges").after('<i class="fa fa-user">'+$name+'</i>');
				$("#login").fadeOut("slow");
				$("#reges").fadeOut("slow");
				$('#myModal').modal("hide");
			}
			else{
				alert("用户已存在，请重新输入！");
			}
		});
		}
	});


	$("#login").click(function(){
		$("#inputagain").addClass("hidden");
		$("#regesAction").addClass("hidden");
		$("#loginAction").removeClass("hidden");
	});

	$("#reges").click(function(){
		$("#inputagain").removeClass("hidden");
		$("#regesAction").removeClass("hidden");
		$("#loginAction").addClass("hidden");
	});
});