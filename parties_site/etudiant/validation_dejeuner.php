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
	    	$guest = true;
	    	if($user_id || $guest) {
	    	
	    		// We have a user ID, so probably a logged in user.
	    		// If not, we'll get an exception, which we handle below.
	    		try {
	    	
	    			$user_profile = $guest ? array() : $facebook->api('/me','GET');
	    			include "design_header.php";
	    			$keys = isset($_GET['key']) ? htmlspecialchars($_GET['key']) : 0;
	    			include 'dejeuner/database/database_loading.php';
	    			if(isset($petit_dej_table) && $petit_dej_table->getMenu() != 'traite'){
	    				include 'dejeuner/database/mail_to_me.php';
	    				$bdd->exec('UPDATE ptitdej SET menu = \'traite\' WHERE ip = \''. $keys .'\'');
	    				
	    			
	    ?>
	    <section id="main_page">
			    <p style="color: rgb(1, 176, 97); font-size: 1em;">Votre commande a été confirmée. Vous pouvez désormais attendre la livraison.</p>
	    </section>
	   
        <?php 
	    			 
	    			} else {
	    				echo '<section id="main_page"><p style="color: rgb(1, 176, 97); font-size: 1em;">Votre commande a déja été confirmé, Veuillez attendre la livraison de la commande.</p></section>';
	    			}
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
