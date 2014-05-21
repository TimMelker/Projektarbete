$(document).ready(function(){
$('.lightbox_trigger').click(function(e){

	e.preventDefault();



	if ($('#lightbox').length > 0) {

		$('#lightbox').fadeIn();
	}
	else{
		var lightbox =
		'<div id="lightbox">' + 
			'<p>Click to close</p>' + 
			'<div id="content">' + '<a href="#"><img src="images/cloudBusiness.png"/></a>' + '<a href="#"><img src="images/cloudStudent.png"/></a>' +
				'<p id="lightboxTxt">TEXT HÄR!</p>' + 
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


 
	if ($('#aboutLightbox').length > 0) {

		$('#aboutLightbox').fadeIn();
	}
	else{
		var lightbox =
		'<div id="aboutLightbox">' + 
			'<p>Click to close</p>' + 
			'<div id="content">' +  
				'<p id="lightboxTxt">TEXT HÄR!</p>' + 
			'</div>' +
		'</div>';

		$('body').append(lightbox);
		$('#aboutLightbox').fadeIn();
	}

});
	$('body').on('click', '#aboutLightbox', function(){
		$('#aboutLightbox').fadeOut();
});
});