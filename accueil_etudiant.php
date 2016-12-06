<!DOCTYPE html>

<html>
	 <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style_accueil_etudiant.css" type="text/css" media="screen" />
        <title>Kartel Accueil Etudiant</title>
  		<script src="script/jquery.js" type="text/javascript"></script>
  		<script src="script/redimensionnement.js" type="text/javascript"></script>
    </head>

    <body>
	<a href="accueil_pro.php"><img src="img_kar/bouton_etudiant.jpg" class="bouton_on_off" /></a>
		<?php
		  //if(isset($_GET['pw']) && $_GET['pw'] == 'lolwtfomg1956333')
		   // {
		    	include 'fb_connect/fb_handler.php';
		    	$success = false;
		  if($user_id) {
				
		          // We have a user ID, so probably a logged in user.
		          // If not, we'll get an exception, which we handle below.
		          try {
		    
		            $user_profile = $facebook->api('/me','GET');
		            //echo "<pre>";
		            $success = true;
		            //header('Location: parties_site/etudiant/page_accueil.php');
					echo '<a href="parties_site/etudiant/page_accueil.php" title="Aller sur le site web Kartel">';
		            //the website code with facebook info here
		            //print_r($user_profile);
		            //echo "</pre>";
		    
		          } catch(FacebookApiException $e) {
		            // If the user is logged out, you can have a 
		            // user ID even though the access token is invalid.
		            // In this case, we'll get an exception, so we'll
		            // just ask the user to login again here.
		            $login_url = $facebook->getLoginUrl(); 
					echo '<a href="" title="Aller sur le site web Kartel">';
		          	$log = '<a href="'. $login_url . '" title="Se connecter avec FaceBook"><img src="img_kar/boutonconnect.jpg" class="fb_button" /></a>'
		            		. '<a href="parties_site/etudiant/page_accueil.php?guest=1" title="Se connecter sans FaceBook"><img src="img_kar/no_connect.jpg" class="fb_button_no" /></a>';
		            error_log($e->getType());
		            error_log($e->getMessage());
		          }   
		    } else {
		          // No user, print a link for the user to login
		          $login_url = $facebook->getLoginUrl();
					echo '<a href="img_kar/fbconnect.jpg"title="Aller sur le site web Kartel">';
		          	$log = '<a href="'. $login_url . '" title="Se connecter avec FaceBook"><img src="img_kar/boutonconnect.jpg" class="fb_button" /></a>'
		            		. '<a href="parties_site/etudiant/page_accueil.php?guest=1" title="Se connecter sans FaceBook"><img src="img_kar/no_connect.jpg" class="fb_button_no" /></a>';
		          //echo 'No Log. Please <a href="' . $login_url . '">login.</a>';
					//}
		    }
		    echo '<img src="img_kar/accueil_etudiant.jpg" class="main_page" /></a>';
		?>

    
	<div id="overlay"></div>
	
	<?php 
	if(!$success)
	{
	?>
    <script>
		
        var links = document.getElementsByTagName('a'),
            linksLen = links.length;

        for (var i = 1 ; i < linksLen ; i++) {

            links[i].onclick = function() { 
                displayImg(this);           
                return false;              
            };

        }

        function displayImg(link) {

            var img = new Image(),
                overlay = document.getElementById('overlay');
			
            img.onload = function() {
                overlay.innerHTML = 
                 
                <?php 
                echo '\'' . $log . '\'';
                //echo '<script src="script/redimensionnement.js" type="text/javascript"></script>'
                ?> + '<img src="img_kar/fbconnect.jpg" class="main_page2" />';
                redimensionnement();

                //overlay.appendChild(img);
            };

            img.src = link.href;
            overlay.style.display = 'block';
            overlay.innerHTML = '<span>Chargement en cours...</span>';

        }
		
        document.getElementById('overlay').onclick = function() {
            this.style.display = 'none';
        };

    	<?php } ?>
    </script>
    </body>
</html>

