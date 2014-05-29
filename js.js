$('.lightbox_trigger').click(function(e){

	e.preventDefault();



	if ($('#lightbox').length > 0) {

		$('#lightbox').fadeIn();
	}
	else{
		var lightbox =
		'<div id="lightbox">' + 
			'<p>Click to close</p>' + 
			'<div id="content">' + '<a href="/github/Projektarbete/login/registerBusiness.php" id="imgCloudBusiness"><img src="images/cloudBusiness.png"/></a>' + '<a href="/github/Projektarbete/login/registerStudent.php"><img src="images/cloudStudent.png"/></a>' + 
			'</div>' +
		'</div>';
		$('body').append(lightbox);
		$('#lightbox').fadeIn();
	}

});
	$('body').on('click', '#lightbox', function(){
		$('#lightbox').fadeOut();
});

$('#aboutBtn').click(function(e){

	e.preventDefault();


 

		$('#aboutLightbox').fadeIn();
});
	$('body').on('click', '#aboutLightbox', function(){
		$('#aboutLightbox').fadeOut();
});