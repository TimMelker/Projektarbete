$('.lightbox_trigger').click(function(e){

	e.preventDefault();



	if ($('#lightbox').length > 0) {

		$('#lightbox').show();
	}
	else{
		var lightbox =
		'<div id="lightbox">' + 
			'<p>Click to close</p>' + 
		'<div id="content">' +  
			'<p id="lightboxTxt">TEXT HÄR!</p>' + 
		'</div>';

		$('body').append(lightbox);
	}

});
	$('#lightbox').on('click', function(){
		$('#lightbox').hide();
});