<!DOCTYPE html>

<html>
	 <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style_site_web_etudiant.css" />
        <title>Kartel Site Etudiant</title>
    </head>

    <body>
    	
		<?php
			//ce code ici est extr�mement important pour chaque page web de la partie �tudiante
		  //if(isset($_GET['pw']) && $_GET['pw'] == 'lolwtfomg1956333')
		   // {
		    	include '../fb_connect/fb_handler.php';
		  if($user_id) {
				
		          // We have a user ID, so probably a logged in user.
		          // If not, we'll get an exception, which we handle below.
		          try {
		    
		            $user_profile = $facebook->api('/me','GET');
		            
		?>   
					paage etudianteeeee
					<?php

					print_r($user_profile);
						/*
					    print_r($user_profile);
					    PUT THE CODE HERE DAWG
					    */
				    ?>
		<?php  
		          } catch(FacebookApiException $e) {
		          	header('Location: ../accueil_etudiant.php?');
		            error_log($e->getType());
		            error_log($e->getMessage());
		          }   
		    } else {
		          // No user, print a link for the user to login
		          	header('Location: ../accueil_etudiant.php?');
		    }
		 // }
		?>
    
    </body>
</html>
