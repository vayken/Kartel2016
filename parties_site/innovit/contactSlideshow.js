var container;
var alreadySelected = Array();
var randomList = Array();
var counter = 0, contactIndex = 1;
var selectedIndex = -1;
var contacts = [{"image":"total.jpg", "link": "", "alias": "Total : l’Innovation, vision optimiste <br/>ou bonne conscience", "desc":"Total est une entreprise pétrolière française privée, qui fait partie des supermajors, c’est-à-dire des 6 plus grosses entreprises du secteur à l’échelle mondiale. C’est la 1ère entreprise française en termes de chiffre d’affaires avec 200 milliards d’euros ! Autant dire que pour sa première interview, <strong>Innov’IT</strong> s’est attaqué à du sérieux. Son siège social se situe dans le quartier de la Défense près de Paris, dans les Hauts-de-Seine, et c’est dans ces locaux que l’on a eu le plaisir de pouvoir rencontrer <strong>Jean-Charles Guillet, directeur Innovation de Total Marketing & Services.</strong>"},
			   {"image":"logo_TSP.jpg", "link": "", "alias": "La recherche au service de l’innovation : l’exemple de Télécom SudParis", "desc":"Jusqu’à présent notre équipe ne vous a proposé que des interviews des figures de l’innovation dans le monde de l’entreprise. <strong>Mais qui a dit que l’innovation ne se cantonnait qu’au secteur privé ?</strong> En effet, dans son objectif d’améliorer et d’augmenter l’état des connaissances, la recherche est à la fois une grande créatrice et consommatrice d’innovations. Nos étudiants sont donc allés à la rencontre de certains acteurs de ce domaine , à Télécom SudParis une grande école d’ingénieur portée sur les sciences du numérique."},
			   {"image":"netxp.jpg", "link": "", "alias": "NetXP : La rigueur au service de l’innovation", "desc":"L’équipe Innov’IT en collaboration avec la radio étudiante Evryone a interviewé Michael Briquet, directeur commercial de NetXP, parrain de Télécom Ecole de Management et SudParis en 2011 mais également de la future promotion de 2015. Une entreprise proche de TSP donc, dont les effectifs sont composés à plus de 20% d’anciens de notre école. Raison de plus de découvrir cette entreprise, florissante bien qu’atypique."},
			   ];
			   
var secAnimation = null;

$('document').ready(function(){
	generateRandomList();
	secAnimation = setInterval("dispose()", 20);
	$('#slideContact' + 1 +' li').mouseenter(function(){
		var index = $(this).index();
		if(inArray(alreadySelected, index))
		$('#slideContact' + 1 +' li').eq(index).append('<span onclick="displayDescription(' + 1 +', ' + (index) +')" class="contactText"><img src="trombi_surbrillance/' + contacts[index]['image'] +'" /></span>');
	}).mouseleave(function(){
		$(this).find('span').remove();
	});
	$('#slideContact' + 2 +' li').mouseenter(function(){
		var index = $(this).index();
		if(inArray(alreadySelected, index + 5))
		$('#slideContact' + 2 +' li').eq(index).append('<span onclick="displayDescription(' + 2 +', ' + (index + 5) +')" class="contactText"><img src="trombi_surbrillance/' + contacts[index + 5]['image'] +'" /></span>');
	}).mouseleave(function(){
		$(this).find('span').remove();
	});
	$('#slideContact' + 3 +' li').mouseenter(function(){
		var index = $(this).index();
		if(inArray(alreadySelected, index + 10))
		$('#slideContact' + 3 +' li').eq(index).append('<span onclick="displayDescription(' + 3 +', ' + (index + 10) +')" class="contactText"><img src="trombi_surbrillance/' + contacts[index + 10]['image'] +'" /></span>');
	}).mouseleave(function(){
		$(this).find('span').remove();
	});
	$('#slideContact' + 4 +' li').mouseenter(function(){
		var index = $(this).index();
		if(inArray(alreadySelected, index + 15))
		$('#slideContact' + 4 +' li').eq(index).append('<span onclick="displayDescription(' + 4 +', ' + (index + 15) +')" class="contactText"><img src="trombi_surbrillance/' + contacts[index + 15]['image'] +'" /></span>');
	}).mouseleave(function(){
		$(this).find('span').remove();
	});
	$('#slideContact' + 5 +' li').mouseenter(function(){
		var index = $(this).index();
		if(inArray(alreadySelected, index + 20))
		$('#slideContact' + 5 +' li').eq(index).append('<span onclick="displayDescription(' + 5 +', ' + (index + 20) +')" class="contactText"><img src="trombi_surbrillance/' + contacts[index + 20]['image'] +'" /></span>');
	}).mouseleave(function(){
		$(this).find('span').remove();
	});
	$('#slideContact' + 6 +' li').mouseenter(function(){
		var index = $(this).index();
		if(inArray(alreadySelected, index + 25))
		$('#slideContact' + 6 +' li').eq(index).append('<span onclick="displayDescription(' + 6 +', ' + (index + 25) +')" class="contactText"><img src="trombi_surbrillance/' + contacts[index + 25]['image'] +'" /></span>');
	}).mouseleave(function(){
		$(this).find('span').remove();
	});
	$('#slideContact' + 7 +' li').mouseenter(function(){
		var index = $(this).index();
		if(inArray(alreadySelected, index + 30))
		$('#slideContact' + 7 +' li').eq(index).append('<span onclick="displayDescription(' + 7 +', ' + (index + 30) +')" class="contactText"><img src="trombi_surbrillance/' + contacts[index + 30]['image'] +'" /></span>');
	}).mouseleave(function(){
		$(this).find('span').remove();
	});
});

function displayDescription(index, globalIndex){

	$('#main_page').animate({ height: '1680px' }, {queue: false});
	newdiv = document.createElement( "div" );
	newdiv.id = "description";
	arrowPointer = document.createElement( "div" );
	arrowPointer.id = "pointer";
	
	newdiv.innerHTML = '<span style="color: white; text-align: center; font-size: 1.2em;" ><strong>'+ contacts[globalIndex]['alias'] +'</strong></span><br/><br/> <span style="color: white; ">' + contacts[globalIndex]['desc'] + '</span>'
						+ '<br/><a href="'+ contacts[globalIndex]['link'] +'" style="color: yellow;">Lire la suite</a>';
	arrowPointer.innerHTML = '<img src="sprites/arrow.png" />';
	
    for(var i = 1; i <= index; i++){
    	$('#slideContact' + i).animate({ top: '0px' });
    }
	var desc = document.getElementById('description');
	var pointer = document.getElementById('pointer');
	if(desc) desc.remove();
	if(pointer) pointer.remove();
	
    if(selectedIndex != globalIndex){
        for(var i = index + 1; i <= 8; i++){
        	$('#slideContact' + i).animate({ top: '210px' }, {queue: false});
        }
        $('#main_page').append(arrowPointer);
    	$('#pointer').css('top', (-1206 + ((index - 1) * 195)) +'px');
    	$('#pointer').css('left',(114 + (Math.max(selectedIndex, 0) % 5) * 194) + 'px');
        if(index != Math.floor(selectedIndex / 5) + 1){
        	$('#pointer').css('left',(114 + (Math.max(globalIndex, 0) % 5) * 194) + 'px');
            $('#pointer').hide();
            $('#pointer').fadeIn(800);
        } else {
        	$('#pointer').animate({ left: (114 + (globalIndex % 5) * 194) + 'px' }, {queue: false});
        }
        $('#slideContact' + index).append(newdiv);
        $('#description').hide();
        $('#description').fadeIn(500);
        selectedIndex = globalIndex;
    } else {
        for(var i = index + 1; i <= 8; i++){
        	$('#slideContact' + i).animate({ top: '0px' }, {queue: false});
        }
        selectedIndex = -1;
        if(desc) desc.remove();
    	if(pointer) pointer.remove();
    	$('#main_page').animate({ height: '1490px' }, {queue: false});
    }
    
}

// random Int generation
function getRandomInt (min, max){
    return Math.floor(Math.random() * (max - min + 1)) + min;
}
// check if value already is in array
function inArray(array, p_val) {
    var l = array.length;
    for(var i = 0; i < l; i++) {
        if(array[i] == p_val) {
            return true;
        }
    }
    return false;
}

//preloading image
function preloadSlide(obj){
	var pic = new Image();
	pic.src = "trombi/" + obj['image'];
	return pic;
}
function generateRandomList(){
	var itemNumber;
	for(var i = 0; i < contacts.length; i++)
	{
		do {
			itemNumber = getRandomInt(0,contacts.length - 1);
		} while(inArray(randomList, itemNumber));
		randomList.push(itemNumber);
	}
	
}
function dispose(){
	var itemNumber = randomList[counter];
	if(inArray(alreadySelected, itemNumber)){
		if(alreadySelected.length == contacts.length){
			clearInterval(secAnimation);
		}
	}else{	
		var itemPic = preloadSlide(contacts[itemNumber]);
		
		$(itemPic).load(function(){
			var slideIndex = Math.floor(itemNumber / 5) + 1;
			var picIndex = itemNumber % 5;
			$('#slideContact' + slideIndex +' li').eq(picIndex).append('<img src="' + itemPic.src + '" />');
			var item = $('#slideContact' + slideIndex +' li').eq(picIndex).find('img');
			// random animation
			var randomAnimation = getRandomInt(1,2);
			if(randomAnimation == 1){
				item.css('top','0px');
				item.animate({ left: '0px' });
			}else{
				item.css('left','0px');
				item.animate({ top: '0px' });
			}
				
			
			alreadySelected.push(itemNumber);
		});
		counter++;
	}
}