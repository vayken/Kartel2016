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
	  			
			    <img src="sprites/pougne_tem.png" />
			    <br/>
			    <span style="margin-left: 20px;color: rgb(1, 176, 97); font-size: 0.8em;">> Maths financières : </span> <span><a target="_blank" style="font-size: 0.7em;" href="pougnes/FicheMathsFi.pdf">Télécharger</a></span>
			    
			    <br/>
			    <span style="margin-left: 20px;color: rgb(1, 176, 97); font-size: 0.8em;">> Vente : </span> <span><a target="_blank" style="font-size: 0.7em;" href="pougnes/Vente.pdf">Télécharger</a></span>
			     <br/>
			    <span style="margin-left: 20px;color: rgb(1, 176, 97); font-size: 0.8em;">> Econométrie : </span> <span><a target="_blank" style="font-size: 0.7em;" href="pougnes/Econometrie.pdf">Télécharger</a></span>
			    
			     <br/>
			    <span style="margin-left: 20px;color: rgb(1, 176, 97); font-size: 0.8em;">> Connaissance de l'entreprise : </span> <span><a target="_blank" style="font-size: 0.7em;" href="pougnes/Connaissance de l'entreprise.pdf">Télécharger</a></span>
			     <br/>
			    <span style="margin-left: 20px;color: rgb(1, 176, 97); font-size: 0.8em;">> Quizz Société et Technologies d'Information : </span> <span><a target="_blank" style="font-size: 0.7em;" href="pougnes/Quizz STI.pdf">Télécharger</a></span>
			     <br/>
			    <span style="margin-left: 20px;color: rgb(1, 176, 97); font-size: 0.8em;">> Correction - Quizz Société et Technologies d'Information : </span> <span><a target="_blank" style="font-size: 0.7em;" href="pougnes/Correction Quizz STI.pdf">Télécharger</a></span>
			     <br/>
			    <span style="margin-left: 20px;color: rgb(1, 176, 97); font-size: 0.8em;">> Quizz Maths Financières : </span> <span><a target="_blank" style="font-size: 0.7em;" href="pougnes/Quizz Maths Fi.pdf">Télécharger</a></span>
			     <br/>
			    <span style="margin-left: 20px;color: rgb(1, 176, 97); font-size: 0.8em;">> Correction - Maths Financières : </span> <span><a target="_blank" style="font-size: 0.7em;" href="pougnes/CORRECTION - Quizz Maths Fi.pdf">Télécharger</a></span>
			     <br/>
			    <span style="margin-left: 20px;color: rgb(1, 176, 97); font-size: 0.8em;">> Slides amphi compta : </span> <span><a target="_blank" style="font-size: 0.7em;" href="pougnes/Slides amphi compta.pdf">Télécharger</a></span>
			    
			    <br/>
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
