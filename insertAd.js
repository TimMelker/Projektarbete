
function myCall(){
	var myElem = document.getElementById('mybox');
	if(myElem == null){
	var request =$.ajax({
		url: "insertAd.php",
		type: "GET",
		dataType: "html"
	});
	request.done(function(msg){
		var element = ''
		element += '<div id="mybox" style="width: 500px; height: 500px; border: 1px solid #999; margin-left: 350px;">';
		element += '<h1>HEJ</h1>';
		element += '</div>';
		$("#userContainer").append(element);
		$("#mybox").html(msg)
		$("#userInfo").hide();
	});
	
	request.fail(function(jqXHR, textStatus){
		alert( "Request failed: " + textStatus );
	});	
}
else{
	$("#mybox").show();
	$("#userInfo").hide();
}
}

function myFall(){
	
		$('#mybox').hide();
		$("#userInfo").show();
}