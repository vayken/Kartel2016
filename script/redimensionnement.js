
function scaleSize(maxW, maxH, currW, currH){

	var ratio = currH / currW;

	if(currW > maxW){
		ratio = maxW / currW;
		
		currH = currH * ratio;
		currW = maxW;//currW * ratio;
	
	} else if(currH > maxH){
		ratio = maxH / currH;
		
		currH = maxH;//currH * ratio;
		currW = currW * ratio;
	}

	return [currW, currH];
	}
function scaleSize2(maxW, maxH, currW, currH){
	var ratio = maxH/maxW;
	if (currH/currW > ratio){
		// height is the problem
		if (currW > maxH){
			currW = Math.round(currW*(maxH/currW));
			currH = maxH;
		}
	} else {
		    // width is the problem
		if (currW > maxH){
			currH = Math.round(currW*(maxW/currW));
			currW = maxW;
		}
	}
	return [currW, currH];
		
}
function redimensionnement(){
	
	/*
	 *  code pour le logo
	 */
	var $image = $('img.main_page');
	var $image2 = $('img.main_page2');
	var $imageBouton = $('img.fb_button');
	var $imageBouton_no = $('img.fb_button_no');
	var $boutonEtudiant = $('img.bouton_on_off');
	 
	var body_width = $(window).width();
	var body_height = $(window).height();
	
	var newSize = scaleSize(body_width, body_height, 1110, 888);
	var newSizeBouton = scaleSize(Math.ceil(body_width / 3.8), Math.ceil(body_height / 11), 291, 80);
	var newSizeBoutonEtudiant = scaleSize(Math.ceil(body_width / 4.2), Math.ceil(body_height / 3.2), 260, 270);
	
	var $totalLeft = (body_width - newSize[0]) / 2;
	var $totalTop = 0;
	
	/*
	 * 
	.fb_button
	{
		position: fixed;
		left: 425px;
		top: 554px;
		width : 291px;
		height: 80px;
	    background-image: url("img_kar/boutonconnect.jpg");
		
	}
	
	 */
	$image.css({
		'width': newSize[0] + 'px',
		'height': newSize[1] + 'px',
		'left': $totalLeft + 'px',
		'top': $totalTop + 'px',
	});
	$image2.css({
		'width': newSize[0] + 'px',
		'height': newSize[1] + 'px',
		'left': $totalLeft + 'px',
		'top': $totalTop + 'px',
	});

	$imageBouton.css({
		'width': newSizeBouton[0] + 'px',
		'height': newSizeBouton[1] + 'px',
		'left': ($totalLeft + Math.ceil(newSize[0] / 2.62)) + 'px',
		'top': ($totalTop + Math.ceil(newSize[1] / 1.61)) + 'px'
	});

	$imageBouton_no.css({
		'width': newSizeBouton[0] + 'px',
		'height': newSizeBouton[1] + 'px',
		'left': ($totalLeft + Math.ceil(newSize[0] / 2.62)) + 'px',
		'top': ($totalTop + Math.ceil(newSize[1] / 1.35)) + 'px'
	});

	$boutonEtudiant.css({
		'width': newSizeBoutonEtudiant[0] + 'px',
		'height': newSizeBoutonEtudiant[1] + 'px',
		'left': ($totalLeft + Math.ceil(newSize[0] / 1.35)) + 'px',
		'top': ($totalTop + Math.ceil(newSize[1] / 1.46)) + 'px'
	});
	
	/*if (body_width / body_height >= over) {
		$image.css({
			'width': body_width + 'px',
			'height': Math.ceil(under * body_width) + 'px',
			'left': '0px',
			'top': Math.abs((under * body_width) - body_height) / -2 + 'px'
		});
	}
	 
	else {
		$image.css({
			'width': Math.ceil(over * body_height) + 'px',
			'height': body_height + 'px',
			'top': '0px',
			'left': Math.abs((over * body_height) - body_width) / -2 + 'px'
		});
	}*/
	
	
}

$(document).ready(function(){

	// Au chargement initial
	redimensionnement();
	 
	// En cas de redimensionnement de la fenêtre
	$(window).resize(function(){
		redimensionnement();
	});

});