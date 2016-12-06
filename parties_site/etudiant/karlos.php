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
	    <section id="main_page" style="height: 1750px;">
			    <img src="sprites/karlos.png" />
			    <p style="font-size: 0.6em; color: white;padding-right: 15px; padding-left: 15px;">
			    <span style="color: rgb(1, 176, 97);">K</span>arlos, de son vrai nom <span style="color: rgb(1, 176, 97);">K</span>arlito Da Silva de La Pinata, fils de Monica <span style="color: rgb(1, 176, 97);">K</span>ruz et de Fidel <span style="color: rgb(1, 176, 97);">K</span>astro, est 
				né à <span style="color: rgb(1, 176, 97);">K</span>ancùn le 24 novembre 2014. Très jeune, il développe son sens inné de la danse en 
				devenant le précurseur du <span style="color: rgb(1, 176, 97);">K</span>uduro. Il vécut une enfance dorée jusqu’au jour où il apprit que les 
				<span style="color: rgb(1, 176, 97);">K</span>actus n’existaient pas en France. Il décida donc de s’y exiler afin de repeupler le territoire. 
			    </p>
			    <p style="font-size: 0.6em; color: white;padding-right: 15px; padding-left: 15px;">
			    Il prit un <span style="color: rgb(1, 176, 97);">K</span>ovoit à Orly qui le déposa accidentellement à Télécom Evry. Il chercha alors une 
				chambre au <span style="color: rgb(1, 176, 97);">K</span>rous, quand soudain il croisa <span style="color: rgb(1, 176, 97);">K</span>ortex le prenant accidentellement pour un 
				Shockwave. Il échangea quelques Punchlines et se rendit au <span style="color: rgb(1, 176, 97);">K</span>lub B. Souffrant d’une <span style="color: rgb(1, 176, 97);">K</span>alvitie il mit 
				son bandana et parti pécho dans le plus grand des <span style="color: rgb(1, 176, 97);">K</span>almes. Il <span style="color: rgb(1, 176, 97);">K</span>roisa quelques Pandore saouls sur 
				le <span style="color: rgb(1, 176, 97);">K</span>ôté, mais il n’alla pas leur parler tant l’orange lui piquait les yeux. Puis, voulant faire le <span style="color: rgb(1, 176, 97);">K</span>aïd et 
				rivaliser avec les <span style="color: rgb(1, 176, 97);">K</span>oq’tail, il enfila sa plus belle <span style="color: rgb(1, 176, 97);">K</span>apote dans l’espoir de mettre une <span style="color: rgb(1, 176, 97);">K</span>artouche. 
				Suite à de nombreux échecs, il eût le <span style="color: rgb(1, 176, 97);">K</span>afard et se mit la plus grosse <span style="color: rgb(1, 176, 97);">K</span>uite de sa vie.
			    </p>
			    <p style="font-size: 0.6em; color: white;padding-right: 15px; padding-left: 15px;">
			    Le lendemain matin, <span style="color: rgb(1, 176, 97);">K</span>arlos eut un Flashback et découvrit qu’il s’était fait <span style="color: rgb(1, 176, 97);">K</span>arotter son bandana, il 
				écrivit alors un mail à <span style="color: rgb(1, 176, 97);">K</span>amilleri. Mais <span style="color: rgb(1, 176, 97);">K</span>amilleri s’en battu les <span style="color: rgb(1, 176, 97);">K</span>ouilles. <br/>
				Déprimé, il passe du <span style="color: rgb(1, 176, 97);">K</span>aviar aux <span style="color: rgb(1, 176, 97);">K</span>akahuètes… Puis, il découvrit sur e-<span style="color: rgb(1, 176, 97);">K</span>ampus que prochainement 
				la soirée de Noël allait avoir lieu. <br/>
				Soucieux du détail, il <span style="color: rgb(1, 176, 97);">K</span>ommença à préparer ses plus belles citations pour pécho : <br/>
				« j’ai du <span style="color: rgb(1, 176, 97);">K</span>apital bb, j’t’enmène en <span style="color: rgb(1, 176, 97);">K</span>alèche » <br/>
				« hé mon <span style="color: rgb(1, 176, 97);">K</span>eur y’a moyen que j’te <span style="color: rgb(1, 176, 97);">K</span>en ? »<br/>
				«  tu sais <span style="color: rgb(1, 176, 97);">K</span>oquine, tu me fais frétiller le <span style="color: rgb(1, 176, 97);">K</span>actus »<br/>
				« pas de <span style="color: rgb(1, 176, 97);">K</span>alin, ce soir c’est le <span style="color: rgb(1, 176, 97);">K</span>osovo » 
			    </p>
			    <p style="font-size: 0.6em; color: white;padding-right: 15px; padding-left: 15px;">
			    Il partit ensuite faire quelques <span style="color: rgb(1, 176, 97);">K</span>ourses dans le but d’acheter un <span style="color: rgb(1, 176, 97);">K</span>ostard. Il acheta un parfum <span style="color: rgb(1, 176, 97);">K</span>alvin 
				<span style="color: rgb(1, 176, 97);">K</span>lein, une montre <span style="color: rgb(1, 176, 97);">K</span>artier et un <span style="color: rgb(1, 176, 97);">K</span>abriolet et partit en direction du forum.
				Hélas, <span style="color: rgb(1, 176, 97);">K</span>atastrophe : la soirée de Noël est annulée. Il croisa un gars de la D qui lui proposa de la 
				<span style="color: rgb(1, 176, 97);">K</span>oke pour noyer son chagrin, mais refusa en voyant une jolie <span style="color: rgb(1, 176, 97);">K</span>artel. Il prit alors son <span style="color: rgb(1, 176, 97);">K</span>ourage à 
				une main et alla lui parler. Elle le <span style="color: rgb(1, 176, 97);">K</span>onsola en lui assurant une fat soirée <span style="color: rgb(1, 176, 97);">K</span>artel…
			    </p>
			    <p style="font-size: 0.6em; color: white;padding-right: 15px; padding-left: 15px;">
			    <span style="color: rgb(1, 176, 97);">K</span>arlos réussira-t-il à pécho et faire plein de bébés <span style="color: rgb(1, 176, 97);">K</span>actus? Rendez-vous à la soirée de campagne. 
			    </p>
			    <p style="font-size: 0.6em; color: white;padding-right: 15px; padding-left: 15px;">
			    Les 3 <span style="color: rgb(1, 176, 97);">K</span>assos.
			    </p>
			    <img src="sprites/karlos.jpg" />
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
