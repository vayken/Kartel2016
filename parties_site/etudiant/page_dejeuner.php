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
	    <section id="main_page" style="height: 2450px;">
			    <p style="color: rgb(1, 176, 97); font-size: 1.2em;">Petit Déjeuner</p>
			    <p style="color: rgb(1, 176, 97);">Bonjour, au menu pour Samedi : pommes de terre, nuggets, gâteau, bonbons, et plein de goodies!<br/>
			    Vous ne pouvez faire qu'une seule commande par appartement/chambre.<br/><br/>
			    Pour les problèmes éventuels, envoyez un mail à l'adresse suivante : petitdejkartel2015@gmail.com
			    </p>
			    <form style="color: rgb(1, 176, 97); margin-left: 25px; " action="saved_dejeuner.php?guest=1" method="post">
			    
			    <label for="nom" >Nom</label><br/>
			    <input required style="border-radius: 7px; width: 400px; height: 50px; font-size:1em;" placeholder="Nom" type="text" id="nom" name="nom" /><br/><br/>
			    
			    <label for="prenom" >Prénom</label><br/>
			    <input required style="border-radius: 7px; width: 400px; height: 50px; font-size:1em;" placeholder="Prénom" type="text" id="prenom" name="prenom" /><br/><br/>
			    
			    <label for="numTel" >Numéro de Téléphone</label><br/>
			    <input required style="border-radius: 7px; width: 400px; height: 50px; font-size:1em;" placeholder="Téléphone" type="tel" id="numTel" name="numTel" /><br/><br/>
			    
			    <label for="mail" >Adresse e-mail</label><br/>
			    <input required style="border-radius: 7px; width: 400px; height: 50px; font-size:1em;" placeholder="E-mail" type="email" id="mail" name="mail" /><br/><br/>
			    
			    <div class="type_batiment">
			    	<label for="typeBatiment" >Bâtiment</label><br/>
				    <select style="border-radius: 7px; width: 250px; height: 50px; font-size:1em;" required name="typeBatiment">
				    	<optgroup label="batiment maisel">
				    		<option selected value = "U1">U1</option>
				    		<option value = "U2">U2</option>
				    		<option value = "U3">U3</option>
				    		<option value = "U4">U4</option>
				    		<option value = "U5">U5</option>
				    		<option value = "U6">U6</option>
				    	</optgroup>
				    	<optgroup label="autre">
				    		<option value = "coloc">Colocation</option>
				    		<option value = "autre">Autre</option>
				    	</optgroup>
				    </select>
			    </div>
			    <div id="adresse_livraison">
			    <label for="adresse" >Adresse (n°chambre/adresse)</label><br/>
			    <input required style="border-radius: 7px; width: 500px; height: 50px; font-size:1em;" placeholder="Adresse de livraison" type="text" id="adresse" name="adresse" /><br/>
			    </div>
			    
			    <br/><br/>
			    <label for="coloc">Coloc : Liste des étudiants(séparer par des virgules)</label><br/>
			    <textarea style="border-radius: 7px; font-size:1em;" name="coloc" id="coloc" placeholder="Liste des étudiants en coloc (séparer par une virgule)" rows="7" cols="55"></textarea>
			    
			    <br/><br/>
			    <label for="heureLivraison" >Heure de livraison</label><br/>
			    <select style="border-radius: 7px; width: 300px; height: 50px; font-size:1em;" required name="heureLivraison" id="heureLivraison">
			    	<option value = "8h-10h">8h - 10h</option>
			    	<option value = "10h-12h">10h - 12h</option>
			    	<option value = "12h-14h">12h - 14h</option>
			    	<option value = "14h-15h">14h - 16h</option>
			    	<option value = "16h-18h">16h - 18h</option>
			    </select>
			    <br/><br/>
			    <label for="commentaires">Commentaires à ajouter</label><br/>
			    <textarea style="border-radius: 7px; font-size:1em;" name="commentaires" id="commentaires" placeholder="Quelque chose à ajouter?" rows="10" cols="55"></textarea>
			    <br/><br/>
			    <img src="captcha_code_file.php?rand=<?php echo rand(); ?>"
				id="captchaimg" >
				<label for="message">Entrez le code sur l'image ci-dessous :</label>
				<input required style="border-radius: 7px; width: 200px; height: 50px; font-size:1em;" id="6_letters_code" name="6_letters_code" type="text"><br/><br/>
			    <input required style="margin-left: 395px; border-radius: 7px; width: 250px; height: 70px; font-size:1em;" type="submit" value="Commander"/>
			    </form>
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
