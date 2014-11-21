$("#loginAction").click(function(){
	$.get("/bae/index_1.html",function(data,status){
		alert("status is "+status);
	});
});
