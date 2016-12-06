var container;
var alreadySelected = Array();
var randomList = Array();
var counter = 0, contactIndex = 1;
var selectedIndex = -1;
var contacts = [{"image":"1.JPG", "alias":"Zaineb alias « Godmother »", "desc":"Je suis une préz' pas très halal. J’ai mes vices (surtout Antoine) et je ne suis pas très grande, mais vous savez, ce n’est pas la taille qui compte…"},
                {"image":"2.png", "alias":"Antoine alias « Avez-vous vu mon skate? »", "desc":"Depuis que j’ai perdu mon skate, je suis un peu paumé dans ma vie. J’ai décidé de relancer la mode des kway et de m’investir dans le BDE afin de pécho"},
                {"image":"3.JPG", "alias":"Christopher alias « Totof »", "desc":"Vous savez les femmes elles sont vicieuses, elles aiment les vices… c’est pour ça que je suis Vice-président"},
                {"image":"4.JPG", "alias":"Maëva alias « Kalimero »", "desc":"Je suis têtue et râleuse et certainement pas très facile à supporter. Je suis très organisée, à vous de voir si c'est un défaut ou une qualité ! Me plaindre est ma passion, la victoire mon ambition !"},
                {"image":"5.JPG", "alias":"Victoria alias « Sexy money »", "desc":"Je souis Victorria, jé viens dé Vladivostok et pourr moi l’arrgent c’est très imporrtant. Jé voudré être BDE pour montrer à tous cé ploucs dé l’INT la vraie valeur dé la vie."},
                {"image":"6.JPG", "alias":"Florent alias « Dikenekk »", "desc":"Avec mes origines vendéennes j'étais prédestiné à être bon vivant et ambitieux. Je suis donc monté a la capitale pour réussir. Être élu BDE est l’un des objectifs jalonnant le long chemin de mon ascension sociale."},
                {"image":"7.JPG", "alias":"Vibert alias « My nem is Vibert »", "desc":"Jé suis tinois, j’ai beaucoup ordinateur chez moi, réparer pas cher pas cher avec tous mes cousins, appelez 06. pour distribution de rouleau de printemps et cours particulier tinois"},
                {"image":"8.png", "alias":"Nessrine alias « La traîtresse »", "desc":"Je passe mes week-ends à Paris dans des expos et j’attends de pouvoir exposer mes oeuvres à Beaubourg. En attendant, j’aimerais être élu BDE parce que je suis une putain d’artiste malheureusement encore incomprise."},
                {"image":"9.png", "alias":"Louis alias « La duchesse »", "desc":"A l’INT, c’est tous des kékés. Moi j’écoute de la house mais je déteste qu’on dise que je suis un hipster. Je veux qu’on soit élu BDE afin de changer Absinthe en la Concrète."},
                {"image":"10.png", "alias":"Nicolas alias « L’artiste »", "desc":"L’artiste n’a nul besoin de description"},
                {"image":"11.JPG", "alias":"Morgane alias « J’te couche »", "desc":"On m’a toujours dit que pour démarcher des entreprises il fallait de gros atouts. Les miens sont plutôt visibles, je pense."},
                {"image":"12.JPG", "alias":"Samuel alias « Popeye »", "desc":"Les entreprises, c’est comme la gonflette, plus c’est gros mieux c’est."},
                {"image":"13.JPG", "alias":"Cédric alias « La flemme »", "desc":"Flemme de faire une description. Au calme."},
                {"image":"14.JPG", "alias":"Wiem alias « Oui-oui »", "desc":"Je veux être BDE afin de représenter la Tunisie. Oui-oui, le Global Village ne m’a pas suffit."},
                {"image":"15.JPG", "alias":"Mégane alias « Green Peace »", "desc":"Selon Green peace, d’ici 2030, on mourra tous congelés psque les phoques auront disparu. Je veux introduire de la nourriture bio-dégradable, renouvelable et venant de producteurs locaux à chapeau de paille."},
                {"image":"16.JPG", "alias":"Guilhem alias « Franky Vincent »", "desc":"Aux Antilles, on récolte les bananes à mains nues. Si on est élu BDE, la moquette sera faite main."},
                {"image":"17.JPG", "alias":"Loïc alias « Le traître »", "desc":"Depuis que j’ai fait une permanente, j’ai su que les vieux allaient bien m’aimer. Je veux faire le WED afin de redonner aux vieux une seconde jeunesse."},
                {"image":"18.JPG", "alias":"Antony alias « Ma puce »", "desc":"La description n’a pas pu être réalisée pour cause d’état d’ébriété. Veuillez nous excuser pour la gêne occasionnée."},
                {"image":"19.png", "alias":"Joris alias « Fast’n Furious »", "desc":"Ayant vu les soirées à l’INT, j’me suis dit qu’il fallait passer à la vitesse supérieure. Si on est élu BDE, j’organiserai des soirées de fureur, très rapidement."},
                {"image":"20.JPG", "alias":"Cloé alias « Clo’chette »", "desc":"A Toulouse, y’a bien trop de cagoles dans les soirées. Si on est élu BDE, pas de gogo-danseuses, j’vous l’dis putaing"},
                {"image":"21.JPG", "alias":"Rayan alias « Rayan Be Fever »", "desc":"Heywaa, moi je suis là pour foutre le zbeul’ heywaa"},
                {"image":"22.JPG", "alias":"Alisson alias « Barbie »", "desc":"J’ai perdu à INT Next Top Model, du coup j’essaie de me reconvertir dans le pôle soirée du BDE, afin d’obtenir une meilleure visibilité."},
                {"image":"23.JPG", "alias":"Robert alias « Le zouker »", "desc":"J’ai entenu dire que sur le dancefloor y’avait de jolies gazelles. MMMM, je graille. J’ai trrrop faim. J’ai besoin du polo pourrr zouker les petites nenettes là."},
                {"image":"24.JPG", "alias":"Steeven alias « Ch’tiven »", "desc":"J’ai déjà une voiture de beau gosse, manque plus que le polo pour aller voir ma famille dans le Nord-Pas-de-Calais."},
                {"image":"25.JPG", "alias":"Antoine alias « Jet lag »", "desc":"J'habite à NY c'est pour ça j'suis tout le temps en jet lag. Depuis que j'suis pote avec Thomas Bangalter et Zizou j'ai rempli 90% des objectifs de ma vie. Les 10% restants c'est de devenir BDE avec la meilleur team du monde."},
                {"image":"26.png", "alias":"Amine alias « J’ai faim »", "desc":"On m’a dit que quand on était BDE on était rincé l’année prochaine. J’attends avec impatience les repas avec les première années. *gargouillis d’estomac - rire gêné*"},
                {"image":"27.JPG", "alias":"Chris alias « Gitano »", "desc":"Etant animateur et immigré italien de 3ème génération j'étais destiné à une vie précaire de bohème. J'ai décidé de changer de vie : porter le polo BDE, voyager et devenir un célèbre guitariste pour faire un feat avec Bruno Mars."},
                {"image":"28.JPG", "alias":"Axel alias « The dunker »", "desc":"Être BDE c’est comme mettre un panier à 3 points. J’y arriverais."},
                {"image":"29.JPG", "alias":"Joana alias « Chouchou »", "desc":"J’ai vu qu’être BDE ca apportait pas mal de visibilité. J’aimerais en donner à mon couple. Non non, j’suis pas jalouse, c’est juste que si une pétasse s’approche de mon Loulou, je la brûle."},
                {"image":"30.JPG", "alias":"Kevin alias « Loulou »", "desc":"J’aimerais beaucoup avoir le polo, comme ca avec jo’ on a le même. Oui, bébé ?"},
                {"image":"31.JPG", "alias":"Louis alias « Chasse, pêche et tradition »", "desc":"Boh, au lieu de rester sur mon canap’ faut bien j’me bouge hein. Hop hop, ptit polo BDE, petite bière, on se met bien hein."},
                {"image":"32.JPG", "alias":"Anna alias « La modératrice »", "desc":"Moi je trouve qu’à l’INT les valeurs de l’éducation nationale sont perdues. J’aimerais être BDE afin de faire bénéficier à tous une éducation exemplaire."},
                {"image":"33.JPG", "alias":"Sophia alias « Mike Tyson »", "desc":"Moi les autres listes je les met K.O. J’veux être BDE psque avec moi, j’peux vous dire qu’il y aura de l’action."},
                {"image":"34.JPG", "alias":"Tom alias « C’est pas sorcier »", "desc":"Ge né parl Pa b1 le frencé, è, jeu fé les cour ratrapage pour lé gen qi vien pa en cour"},
                {"image":"35.png", "alias":"Adrien alias « Géant vert »", "desc":"On m’a dit que j’était trop grand pour être BDE. De là-haut, j’peux vous dire que j’apprécie pas trop ça. J’suis venu prouver le contraire."}
                ];
			   
var secAnimation = null;

$('document').ready(function(){
	generateRandomList();
	secAnimation = setInterval("dispose()", 30);
	$('#slideContact' + 1 +' li').mouseenter(function(){
		var index = $(this).index();
		if(inArray(alreadySelected, index))
		$('#slideContact' + 1 +' li').eq(index).append('<span onclick="displayDescription(' + 1 +', ' + (index) +')" class="contactText"><a href="javascript:void(0)"><img src="trombi_surbrillance/' + contacts[index]['image'].toLowerCase() +'" /></a></span>');
	}).mouseleave(function(){
		$(this).find('span').remove();
	});
	$('#slideContact' + 2 +' li').mouseenter(function(){
		var index = $(this).index();
		if(inArray(alreadySelected, index + 5))
		$('#slideContact' + 2 +' li').eq(index).append('<span onclick="displayDescription(' + 2 +', ' + (index + 5) +')" class="contactText"><a href="javascript:void(0)"><img src="trombi_surbrillance/' + contacts[index + 5]['image'].toLowerCase() +'" /></a></span>');
	}).mouseleave(function(){
		$(this).find('span').remove();
	});
	$('#slideContact' + 3 +' li').mouseenter(function(){
		var index = $(this).index();
		if(inArray(alreadySelected, index + 10))
		$('#slideContact' + 3 +' li').eq(index).append('<span onclick="displayDescription(' + 3 +', ' + (index + 10) +')" class="contactText"><a href="javascript:void(0)"><img src="trombi_surbrillance/' + contacts[index + 10]['image'].toLowerCase() +'" /></a></span>');
	}).mouseleave(function(){
		$(this).find('span').remove();
	});
	$('#slideContact' + 4 +' li').mouseenter(function(){
		var index = $(this).index();
		if(inArray(alreadySelected, index + 15))
		$('#slideContact' + 4 +' li').eq(index).append('<span onclick="displayDescription(' + 4 +', ' + (index + 15) +')" class="contactText"><a href="javascript:void(0)"><img src="trombi_surbrillance/' + contacts[index + 15]['image'].toLowerCase() +'" /></a></span>');
	}).mouseleave(function(){
		$(this).find('span').remove();
	});
	$('#slideContact' + 5 +' li').mouseenter(function(){
		var index = $(this).index();
		if(inArray(alreadySelected, index + 20))
		$('#slideContact' + 5 +' li').eq(index).append('<span onclick="displayDescription(' + 5 +', ' + (index + 20) +')" class="contactText"><a href="javascript:void(0)"><img src="trombi_surbrillance/' + contacts[index + 20]['image'].toLowerCase() +'" /></a></span>');
	}).mouseleave(function(){
		$(this).find('span').remove();
	});
	$('#slideContact' + 6 +' li').mouseenter(function(){
		var index = $(this).index();
		if(inArray(alreadySelected, index + 25))
		$('#slideContact' + 6 +' li').eq(index).append('<span onclick="displayDescription(' + 6 +', ' + (index + 25) +')" class="contactText"><a href="javascript:void(0)"><img src="trombi_surbrillance/' + contacts[index + 25]['image'].toLowerCase() +'" /></a></span>');
	}).mouseleave(function(){
		$(this).find('span').remove();
	});
	$('#slideContact' + 7 +' li').mouseenter(function(){
		var index = $(this).index();
		if(inArray(alreadySelected, index + 30))
		$('#slideContact' + 7 +' li').eq(index).append('<span onclick="displayDescription(' + 7 +', ' + (index + 30) +')" class="contactText"><a href="javascript:void(0)"><img src="trombi_surbrillance/' + contacts[index + 30]['image'].toLowerCase() +'" /></a></span>');
	}).mouseleave(function(){
		$(this).find('span').remove();
	});
});

function displayDescription(index, globalIndex){

	$('#main_page').animate({ height: '2300px' }, {queue: false});
	newdiv = document.createElement( "div" );
	newdiv.id = "description";
	arrowPointer = document.createElement( "div" );
	arrowPointer.id = "pointer";
	
	newdiv.innerHTML = '<span style="color: white; text-align: center; font-size: 1.2em;" ><strong>'+ contacts[globalIndex]['alias'] +'</strong></span><br/><br/> <span style="color: white;">' + contacts[globalIndex]['desc'] + '</span>'
	 +  '<p style="text-align: center;" ><img style="width: 600px; height: 399px;" src="slide/'+ contacts[globalIndex]['image'].toLowerCase().replace("png", "jpg") +'" /></p>';
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
        	$('#slideContact' + i).animate({ top: '710px' }, {queue: false});
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