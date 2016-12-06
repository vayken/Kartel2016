<!DOCTYPE html>

<html>
	 <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style_site_web_etudiant.css" />
        <title>Kartel Site Etudiant</title>
        <script src="../../script/jquery.js" type="text/javascript"></script>
		
        <script src="../../script/countdown.js"></script>
    </head>

    <body>
    <?php 
	    	include '../../fb_connect/fb_handler.php';
	    	$guest = (isset($_GET['guest']) && htmlspecialchars($_GET['guest']) == 1);
	    	if($user_id || $guest) {
	    	
	    		// We have a user ID, so probably a logged in user.
	    		// If not, we'll get an exception, which we handle below.
	    		try {
	    	
	    			$user_profile = $guest ? array() : $facebook->api('/me','GET');
	    			include "design_header.php";
	    ?>
	    <section id="main_page" style="background-color: black; height: 3700px;">
			    <img src="sprites/events.png" />
			    <p style="color: rgb(1, 176, 97); font-size: 1.2em;">> Kartel City - 4 fevrier | 22h - 4h</p>
			    <p style="font-size: 0.6em; color: white;padding-right: 15px; padding-left: 15px;">
			    KARTEL Soirée de campagne W/ KARTELL, J-ART, LEMARQUIS, PAKEM, MEDERIC.</p>
				
			    <p style="font-size: 0.6em; color: white;padding-right: 15px; padding-left: 15px;">
				Ce mercredi, Kartel vous ouvre ses bras et vous couvre d'amour. 
				Vous retrouverez derrière les platines un cocktail exceptionnel de DJs. 
				On accueille Kartell à l'INT, autant vous dire que l'on est très content...
				Une line up de rêve pour une soirée unique.
				</p>
				
			    <p style="font-size: 0.6em; color: white;padding-right: 15px; padding-left: 15px;">
				Kartel city, soirée placée sous le signe de la ville sud-américaine.
				Ambiance dépaysante, style Dia de los Muertos et favelas, de la bonne musique, un bel accueil, des sourires...
				La recette parfaite d'une soirée réussie.
			    </p>
			    <p style="font-size: 0.6em; color: white;padding-right: 15px; padding-left: 50px; text-align: left;">
			   	▬▬▬▬▬ LINE UP ▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬▬<br/>
				
				◆ KARTELL (Roche Musique)<br/>
				<a target="_blank" href="https://www.facebook.com/iamkartell?fref=ts">Facebook</a><br/>
				<a target="_blank" href="https://soundcloud.com/kartell">Sound cloud</a><br/>
				
				<br/>◆ J-ART<br/>
				<a target="_blank" href="https://www.facebook.com/lemarquismusic?fref=ts&locale=fr_FR">Facebook</a><br/>
				<a target="_blank" href="https://www.facebook.com/pages/J-Art-Music/405069922889128?fref=ts">Sound cloud</a><br/>
				
				<br/>◆ LEMARQUIS (Discothrill)<br/>
				<a target="_blank" href="https://www.facebook.com/lemarquismusic?fref=ts&locale=fr_FR">Facebook</a><br/>
				<a target="_blank" href="https://soundcloud.com/le_marquis">Sound cloud</a><br/>
				
				
				<br/>◆ PAKEM (Miraje/Discothrill)<br/>
				<a target="_blank" href="https://www.facebook.com/Pakemmusic?fref=ts&locale=fr_FR">Facebook</a><br/>
				<a target="_blank" href="https://soundcloud.com/pakem">Sound cloud</a><br/>
			
				
				<br/>◆ MEDERIC (Madman Regent)<br/>
				<a target="_blank" href="https://www.facebook.com/medericmusic?fref=ts&locale=fr_FR">Facebook</a><br/>
				<a target="_blank" href="https://soundcloud.com/medericmusic">Sound cloud</a><br/>
				</p>
				
			    <p style="font-size: 0.6em; color: white;padding-right: 15px; padding-left: 50px; text-align: left;">
				▬▬▬▬▬ INFOS PRATIQUES ▬▬▬▬▬▬▬▬▬▬▬<br/>
				
				FREE >> 22h<br/>
				
				Campus INT<br/>
				9 rue Charles Fourier<br/>
				91000 EVRY<br/>
				
				<br/><span style="color: rgb(1, 176, 97); font-size: 1.2em;">Accès</span> :<br/>
				RER D -- Gare d'Evry - Courcouronnes ou Bras de Fer<br/>
				
				Soirée réservée aux élèves / anciens élèves de TMSP<br/>
				Extés : nombre de places limité. <br/>
				Premier arrivé, premier servi<br/>
				Contactez : <br/>
				joris.fevre@telecom-em.eu<br/>
				
				Interdit aux mineurs.<br/>
				La direction se réserve le droit d'entrée.
			    
			    </p>
			    <p><img src="sprites/soiree.jpg" /></p>
			    
			    <p style="color: rgb(1, 176, 97); font-size: 1.2em;">> Kartel Room - 22 janvier - 21h30</p>
			    <p style="font-size: 0.6em; color: white;padding-right: 15px; padding-left: 15px;">
			    Venez participer aux nombreux tournois dans la Kartel room ! 
				Billard, jeux-vidéos, il y en a pour tous les goûts.
				De nombreux cadeaux à gagner pour les meilleurs d'entre vous ! 
			    </p>
			    <p style="font-size: 0.6em; color: white;padding-right: 15px; padding-left: 15px;">
			   	Stands de nourriture : 
			   	<ul style="list-style-type: none;font-family: 'bikoregular', Arial, serif;font-size: 0.6em; color: white;">
				<li style="margin-left: 310px;">-  les célèbres cookies : 3 pour 1 euro</li>
				<li style="margin-left: 375px;">-  gaufre nutella à 50 cts</li>
				<li style="margin-left: 395px;">-  hot dogs à 1 euro 50 </li>
				</ul>
			    </p>
			    <p style="font-size: 0.6em; color: white;padding-right: 15px; padding-left: 15px;">
			    A jeudi ! <br/>
			    <span style="color: rgb(1, 176, 97);">#K</span>
			    </p>
			    <p><img src="sprites/kartel_room.jpg" /></p>
	    </section>
        <?php 
	    	} catch(FacebookApiException $e) {
		          	header('Location: ../../accueil_etudiant.php?');
		            error_log($e->getType());
		            error_log($e->getMessage());
		          }   
		    } else {
		          // No user, print a link for the user to login
		          	header('Location: ../../accueil_etudiant.php?');
		    }
	    	include "design_footer.php";
	    	
	    ?>
    </body>
</html>
