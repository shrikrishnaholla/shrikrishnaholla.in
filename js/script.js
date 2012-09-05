$(document).ready(function(){
	
	// Calling our splashScreen plugin and
	// passing an array with images to be shown
	
	$('#promoIMG').splashScreen({
		textLayers : [
			'img/student.png',
			'img/foss.png',
			'img/hobby_writer.png',
			'img/kde_dev.png',
			'img/krita_hacker.png'
		]
	});
	
});
