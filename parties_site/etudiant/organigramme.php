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
	    		//<pre>  </pre><pre style="color: rgb(1, 176, 97);font-size:1.2em;text-decoration:line-through;">                               </pre>
	    		//<span style="color: rgb(1, 176, 97);font-size:1.2em;">Organigramme</span>
	    		//<pre style="color: rgb(1, 176, 97);font-size:1.2em;text-decoration:line-through;">                                </pre>
	    		try {
	    	
	    			$user_profile = $guest ? array() : $facebook->api('/me','GET');
	    			include "design_header.php";
	    ?>
	    <section id="main_page" style="height: 960px;">
			    
			    <img src="sprites/organigramme.png" />
				<br/>
				<br/>
			    <img style="width: 1000px; height: 700px; margin-left: 49px; " src="../professionnel/sprites/organigramme.jpg" alt="Organigramme" />
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
