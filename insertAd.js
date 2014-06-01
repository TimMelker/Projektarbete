
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
		element += '<div id="mybox" style="width: 500px; margin-left: 350px;">';
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
		$("#logoutBtnPlacementBusiness").css({
							'position' : 'absolute',
							'margin-left' : '775px',
							'margin-top' : '325px',
							'width' : '0px'});

		$("#loggedIn").css({
						'width' : '72px'});

}

function myFall(){
	
		$('#mybox').hide();
		$("#userInfo").show();
}