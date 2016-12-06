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
	    			if(!isset($_POST['nom'])) header('Location: /');
	    			$errors = '';
	    			if(empty($_SESSION['6_letters_code'] ) || strcasecmp($_SESSION['6_letters_code'], htmlspecialchars($_POST['6_letters_code'])) != 0)
	    			{
	    				//Note: the captcha code is compared case insensitively.
	    				//if you want case sensitive match, update the check above to
	    				// strcmp()
	    				$errors .= "Le code captcha que vous avez entré ne correspond pas.";
	    				echo '<section id="main_page"><p style="color: rgb(1, 176, 97); font-size: 1em;">'. $errors .'</p></section>';
	    				
	    				echo '<';
	    				
	    			}
	    			if(empty($errors))
	    			{
	    			include "dejeuner/database/database_saving.php";
	    			if($success > 0){
	    			include "dejeuner/database/mail.php";
	    ?>
	    <section id="main_page">
			    <p style="color: rgb(1, 176, 97); font-size: 1em;">Merci d'avoir commandé un petit déjeuner. Un mail vous a été envoyé à <?php echo $petit_dej->getMail();?>, veuillez confirmer
			    la commande.</p>
	   </section>
        <?php 
	    			} else {
	    				echo '<section id="main_page"><p style="color: rgb(1, 176, 97); font-size: 1em;">Désolé, votre commande est en cours de préparation. Veuillez patienter.</p></section>';
	    			}
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
