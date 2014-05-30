function firstCall(){
	var myElem = document.getElementById('upuser');
	if(myElem == null){
	var request =$.ajax({
		url: "insertAd.php",
		type: "GET",
		dataType: "html"
	});
	request.done(function(msg){
		var element = ''
		element += '<div id="upuser" style="width: 900px; height: auto; border: 1px solid #999; margin-left: auto; margin-right: auto">';
		element += '<h1>Updatera användare</h1>';
		element += '</div>';
		$("#userContainer").append(element);
		$("#upuser").html(msg)
		$("#userInfo").hide();
	});
	
	request.fail(function(jqXHR, textStatus){
		alert( "Request failed: " + textStatus );
	});	
}
else{
	$("#upuser").show();
	$("#userInfo").hide();
}
}

function secondCall(){
	
		$('#upuser').hide();
		$("#userInfo").show();
}