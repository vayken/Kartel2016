var container;
var alreadySelected = Array();
var randomList = Array();
var counter = 0, contactIndex = 1;
var selectedIndex = -1;
var contacts = [{"image":"1 - Zaineb.JPG", "desc":"J’ai une double fonction. Externe, car je représente la liste : je suis en relation avec l’administration et au service des étudiants. Interne, car je dois assurer la cohésion de mon équipe, et veiller au bon accomplissement des tâches : je suis responsable de ma liste."},
			   {"image":"2 - Antoine.JPG", "desc":"Je dois assurer une bonne communication interne. Je suis précisément en charge de 7 pôles (Secrétariat, Alcool, Pougnes, Communication, Soirées et SWEI). Je me dois d’être disponible, polyvalent et de savoir être à l'écoute des autres."},
			   {"image":"3 - Christopher.JPG", "desc":"Ma mission principale consiste à assister la présidente. Je suis précisément en charge de 7 pôles (WED, Trésorerie, Stand, Rits, Sécu-log, RE et Voyage). Mon rôle est de m'assurer du bon déroulement des missions qui leur ont été confiées."},
			   {"image":"4 - Maeva.JPG", "desc":"Je suis l'intermédiaire entre l'administration et les étudiants . Je dois également réaliser des comptes-rendus pour que chacun prenne connaissance des informations qui sont échangées en réunion, ceci étant dans le but d'optimiser notre action."},
			   {"image":"6 - Victoria.JPG", "desc":"Je suis responsable des comptes de la liste. Avec un budget de 16 500€, je me préoccupe des rentrées financières, des dépenses, fais part de la situation financière au Conseil d'administration et assure une répartition pragmatique entre les différents pôles."},
			   {"image":"7 - Florent.JPG", "desc":"J'exerce les mêmes fonctions que celles du trésorier à une échelle plus petite. Je dois éviter les déficits et distribuer équitablement les fonds disponibles parmi les multiples projets qui me sont soumis."},
			   {"image":"8 - Vibert.JPG", "desc":"En tant que responsable WEB, je suis en charge de la programmation du site web, de le mettre à jour et d’assurer son bon fonctionnement. Je veille également à sa sécurité. Je travaille en étroite collaboration avec la communication, afin d’intégrer le design au site WEB."},
	 		   {"image":"9 - Nessrine.JPG", "desc":"En tant que responsable multimedia/com, je suis à cheval entre deux disciplines. Je réalise le design du site WEB et fais également de la communication traditionnelle (affiches d’évènements). Je suis également en charge du community management avec mon pôle. "},
	 		   {"image":"10 - Louis.JPG", "desc":"En tant que responsable communication, je réalise les affiches pour les évènements. Je suis également en charge du community management. Je veille à véhiculer l’image désirée en externe et travaille en étroite collaboration avec les membres de mon pôle."},
			   {"image":"11 - nicolas.JPG", "desc":"Je suis en charge de mettre en scène et réaliser le montage de deux vidéos : un trailer de 3 minutes et un clip de campagne de 12 minutes environ, dans le but de promouvoir la liste au sein des deux écoles. "},
			   {"image":"12 - Morgane.JPG", "desc":"Je suis est en charge de trouver, négocier et renouveler les partenariats avec les entreprises. Je dois réaliser une plaquette afin de pouvoir démarcher. Je dois établir différents partenariats : financiers, promotionnels ou informationnels. "},
			   {"image":"13 - Samuel.JPG", "desc":"Je suis en charge de seconder le responsable afin d’obtenir des fonds supplémentaires, des produits ou des services. Cette activité passe par la prospection, la prise de contact, la présentation puis la négociation d’un contrat."},
			   {"image":"14 - Cedric.JPG", "desc":"Je suis en charge de seconder le responsable afin d’obtenir des fonds supplémentaires, des produits ou des services. Cette activité passe par la prospection, la prise de contact, la présentation puis la négociation d’un contrat."},
			   {"image":"15 - Wiem.JPG", "desc":"Je suis en charge de seconder le responsable afin d’obtenir des fonds supplémentaires, des produits ou des services. Cette activité passe par la prospection, la prise de contact, la présentation puis la négociation d’un contrat."},
			   {"image":"16 - Megane.JPG", "desc":"Mon rôle est de gérer la nourriture durant les différents évènements. Je dois m’assurer de la quantité et de la qualité des produits. Je dois également gérer les stocks afin de prévoir suffisamment et établir des créneaux pour la cuisine. "},
			   {"image":"17 - Guilhem.JPG", "desc":"Je suis chargé d'assurer la sécurité durant les soirées et événements, en mettant en place des créneaux. Je dois également servir de support à l’organisation en fournissant le matériel nécessaire des infrastructures qui sont mises à disposition. "},
			   {"image":"18 - Loic.JPG", "desc":"Je suis chargé d’organiser le week-end de désintégration. Je dois trouver le lieu, les animations et prestataires pour faire en sorte que les étudiants de dernière année puissent profiter d’un dernier week-end au sein de leur promotions. "},
			   {"image":"19 - Anthony.JPG", "desc":"Mon rôle est de gérer la boisson en soirée. Je dois gérer le flux afin qu’il soit raisonnable, et m’assurer du bon écoulement/approvisionnement des stocks. J’ai aussi une responsabilité au sein du bar de l’école. "},
			   {"image":"20 - jORIS.JPG", "desc":"Je suis chargé d’organiser les soirées. Je dois rédiger un dossier détaillé pour l’administration afin d’obtenir la validation de chaque événement. Je dois également gérer les prestataires et trouver les solutions de repli en cas d’imprévu."},
			   {"image":"21 - Cloe.JPG", "desc":"Je suis en charge de seconder le responsable soirée afin d’imaginer entièrement le déroulement de la soirée et en évaluer les possibilités. Mon rôle est donc d'apporter le maximum d'aide à mon pôle pour la conception et le déroulement de la soirée."},
			   {"image":"22 - Rayan.JPG", "desc":"Je suis en charge de seconder le responsable soirée afin d’imaginer entièrement le déroulement de la soirée et en évaluer les possibilités. Mon rôle est donc d'apporter le maximum d'aide à mon pôle pour la conception et le déroulement de la soirée."},
			   {"image":"23 - Alisson.JPG", "desc":"Je suis en charge de seconder le responsable soirée afin d’imaginer entièrement le déroulement de la soirée et en évaluer les possibilités. Mon rôle est donc d'apporter le maximum d'aide à mon pôle pour la conception et le déroulement de la soirée."},
			   {"image":"24 - Robert.JPG", "desc":"Je suis en charge de seconder le responsable soirée afin d’imaginer entièrement le déroulement de la soirée et en évaluer les possibilités. Mon rôle est donc d'apporter le maximum d'aide à mon pôle pour la conception et le déroulement de la soirée."},
			   {"image":"25 - Steeven.JPG", "desc":"Mon travail consiste à organiser la semaine et le week-end d’intégration des nouveaux élèves entrants dans l'école. Le lieu, le transport, les activités ainsi que la nourriture sont gérés par le responsable SWEI et son pôle dans leur intégralité."},
			   {"image":"26 - Antoine.JPG", "desc":"Mon rôle consiste à seconder le responsable SWEI afin de proposer et étudier la faisabilité d'activités des étudiants pendant la semaine et le week-end intégration de la prochaine promotion. Le SWEI nécessite l’un des budgets les plus important du BDE."},
			   {"image":"27 - Amine.JPG", "desc":"Mon rôle consiste à seconder le responsable SWEI afin de proposer et étudier la faisabilité d'activités des étudiants pendant la semaine et le week-end intégration de la prochaine promotion. Le SWEI nécessite l’un des budgets les plus importants du BDE."},
			   {"image":"28 - chris.JPG", "desc":"En tant que responsable voyage, mon rôle est d’organiser plusieurs voyages afin d’animer la vie étudiante. Je suis chargé de démarcher les agences afin de proposer aux étudiants des prix abordables et planifier un programme pour chaque destination."},
			   {"image":"29 - Axel.JPG", "desc":"Je suis en charge de seconder le responsable voyage afin de trouver des destinations qui plaisent à la majorité des étudiants, planifier tout le séjour en tenant compte des fonds disponibles, et enfin encadrer les voyages pendant qu'ils ont lieu."},
			   {"image":"30 - Joana.JPG", "desc":"Je suis chargée de trouver les différentes animations qui se dérouleront pendant la campagne, contacter les prestataires de ces animations et veiller à leur bon déroulement dans le respect des règles de l’école. Je dois faire valider un dossier par l’administration."},
			   {"image":"31 - Kevin.JPG", "desc":"Mon rôle est de seconder la responsable Stand afin de contacter les prestataires des animations et veiller à leur bon déroulement dans le respect des règles de l’école. Je dois rédiger un dossier pour l’administration, afin de le faire valider."},
			   {"image":"32 - Louis.JPG", "desc":"J’ai pour rôle d'élaborer des fiches sur les différents cours et d’aider la préparation des partiels dans la filière ingénieur. Je suis chargé d’organiser également des amphis de révision pour diverses matières, afin d’aider les étudiants en difficulté."},
			   {"image":"33 - Anna.JPG", "desc":"Je suis chargée de rédiger des fiches de révisions des différents cours du cursus ingénieur. J'aide également à l'organisation de sessions de révisions et de préparation aux examens pour toute la promotion."},
			   {"image":"35 - Sophia.JPG", "desc":"Je suis chargée de rédiger des fiches de révisions des différents cours du cursus manager. J'aide également à l'organisation de sessions de révisions et de préparation aux examens pour toute la promotion."},
			   {"image":"35 - Adrien.jpg", "desc":"Je travaille en collaboration avec la secrétaire afin de faire le lien entre les demandes des élèves et la liste. Je participe également à la rédaction de comptes rendus suite aux réunions et je communique activement avec l’administration."},
			   {"image":"35 - Tom.jpg", "desc":"J’ai pour rôle d'élaborer des fiches sur les différents cours et d’aider à la préparation des partiels dans la filière manager. Je suis chargé d’organiser également des amphis de révision pour diverses matières, afin d’aider les étudiants en difficulté."}
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
	
	newdiv.innerHTML = contacts[globalIndex]['desc'];
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