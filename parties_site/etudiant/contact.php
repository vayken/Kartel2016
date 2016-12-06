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
	    <section id="main_page">
			    <img src="sprites/contact.png" />
			    <p style="margin-left: 50px; text-align: left;">
			    <a target="_blank" href="https://www.facebook.com/zaineb.lem.9 ">Zaineb - Préz</a><br/>
				
				<a target="_blank" href="https://www.facebook.com/antoine.barbez">Antoine - Vice-Préz TSP</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/christopher.baron.948">Chrisopher - Vice-Préz TEM</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/maevaa.bibishee">Maëva - Secrétaire</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/victoria.jallat">Victoria - Trésorière</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/florent.guilbaud.16">Florent - Vice-trésorier</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/vibert.bounyasit">Vibert - Respo WEB</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/ness.berr">Nessrine - Respo Com/Multimedia</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/louis.fa.combalbert">Louis - Respo Com</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/nicolas.coeuru">Nicolas - Pôle Com</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/morgane.saintlaurent1">Morgane - Respo RE</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/samuel.kartel2">Samuel - Pôle RE</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/cedric.folly">Cédric - Pôle RE</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/wiem.sabbagh">Wiem - Pôle RE</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/megane.chopin.9">Mégane - Respo RITS</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/guilhem.cornette">Guilhem - Respo Sécu-log</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/loic.palli">Loïc - Respo WED</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/MacBarete">Antony - Respo Alcool</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/jo.fevre">Joris - Respo Soirées</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/cloe.ratel">Cloé - Pôle Soirées</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/rayan.kraiem.9">Rayan - Pôle Soirées</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/alisson.stephan.9">Alisson - Pôle Soirées</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/robert.kelevra.7">Robert - Pôle Soirées</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/steeven.munier">Steeven - Respo SWEI</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/antoine.falck">Antoine - Pôle SWEI</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/The.AngeLus.World">Amine - Pôle SWEI</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/chris.sirigu">Chris - Respo Voyage</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/Axel.Just">Axel - Pôle Voyage</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/pereira.joana1">Joana - Respo Stand</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/kevin.razafinjatovo">Kevin - Pôle Stand</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/lfauchet">Louis - Pougne</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/anna.guinetleroy">Anna - Pougne</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/sophia.shkpnk">Sophia - Pougne</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/tom.zielinger">Tom - Pougne</a><br/>
				
				
				<a target="_blank" href="https://www.facebook.com/adri07b">Adrien - Vice-secrétaire</a><br/>
				
			    
			    </p>
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
