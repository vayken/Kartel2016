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
			    <img src="sprites/chier.png" />
			    <p style="font-size: 0.6em; color: white;padding-right: 70px; padding-left: 70px;">
			    Coincé lors d'un cours peu ou pas intéressant?
				Kartel vous propose ses jeux ou passe-temps préférés.
				Attention certains sont très addictifs.
			    </p>
			    <p  style="text-align: left;font-size: 0.6em; color: white;padding-right: 15px; padding-left: 15px;">
			    > Réussiras-tu à chopper Ariane?<br/>
				<a style="color: rgb(1, 176, 97);" href="http://arianeb.com/dateariane/default.htm">http://arianeb.com/dateariane/default.htm</a>
			    </p>
			    <p style="text-align: left; font-size: 0.6em; color: white;padding-right: 15px; padding-left: 15px;">
			    > Cactus McCoy <br/>
				<a style="color: rgb(1, 176, 97);" href="http://www.koreus.com/jeu/cactus-mccoy.html">http://www.koreus.com/jeu/cactus-mccoy.html</a>
			    </p>
			    <p style="text-align: left; font-size: 0.6em; color: white;padding-right: 15px; padding-left: 15px;">
			    > 9GAG <br/>
				<a style="color: rgb(1, 176, 97);" href="http://www.koreus.com/jeu/cactus-mccoy.html">http://9gag.com/hot</a>
			    </p>
			    <p style="font-size: 0.6em; color: white;padding-right: 70px; padding-left: 70px;">
			    D'autres liens à venir...
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
