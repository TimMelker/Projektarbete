function myCall(){
	var myElem = document.getElementById('mybox');
	if(myElem == null){
	var request =$.ajax({
		url: "mail.php",
		type: "GET",
		dataType: "html"
	});
	request.done(function(msg){
		var element = ''
		element += '<div id="mybox" style="width: 500px; height: 500px; border: 1px solid #999; margin-left: 610px; margin-right: auto;">';
		element += '</div>';
		$("#advert_container").append(element);
		$("#mybox").html(msg);
		$("#replyBtn").hide();
	});
	
	request.fail(function(jqXHR, textStatus){
		alert( "Request failed: " + textStatus );
	});	
}
else{
	$("#mybox").show();
	$("#replyBtn").hide();
}
}

$(function(){
	$('textarea').height($('textarea').prop('scrollHeight'));
});