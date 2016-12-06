<!DOCTYPE html>

<html>
	 <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style_site_web_etudiant.css" />
        <title>Kartel Site Etudiant</title>
        <script src="../../script/jquery.js" type="text/javascript"></script>
		<script language="javascript" src="../../script/diapoSlideShow.js"></script>
		<script language="javascript" src="contactSlideshow.js"></script>
		
        <link rel="stylesheet" type="text/css" href="../carousel/jcarousel.basic.css">
        <script type="text/javascript" src="../carousel/jquery.jcarousel-autoscroll.min.js"></script>
        <script type="text/javascript" src="../carousel/jquery.jcarousel.min.js"></script>
        <script type="text/javascript" src="../carousel/jcarousel.data-attributes.js"></script>
        <script src="../../script/countdown.js"></script>
    	<script type="text/javascript" src="../../script/jquery-1.7.2.min.js"></script>
		<script type="text/javascript" src="../../script/jquery-ui-1.8.21.custom.min.js"></script>
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
	    <nav>
	    	<div id="photo_liste">
		        <div class="wrapper">
		
		            <div class="jcarousel-wrapper">
		                <div data-jcarousel="true" data-wrap="circular" class="jcarousel">
		                    <ul>
		                        <li><a href="page_accueil.php<?php echo ($guest? '?guest=1' : '');?>"><img src="diapo/1.jpg" width="1089" height="448" alt=""></a></li>
		                        <li><a href="events.php<?php echo ($guest? '?guest=1' : '');?>"><img src="diapo/2.jpg" width="1089" height="448" alt=""></a></li>
		                        <li><a href="videos.php<?php echo ($guest? '?guest=1' : '');?>"><img src="diapo/3.jpg" width="1089" height="448" alt=""></a></li>
		                    </ul>
		                </div>
						
		                <a data-jcarousel-control="true" data-target="-=1" href="#" class="jcarousel-control-prev"><img src="diapo/previous.png" width="68" height="177" alt=""></a>
                		<a data-jcarousel-control="true" data-target="+=1" href="#" class="jcarousel-control-next"><img src="diapo/next.png" width="68" height="177" alt=""></a>
		                
		                <p class="jcarousel-pagination">
		                    
		                </p>
		            </div>
		        </div>
	    	</div>
	    </nav>
	    <div style="background-color: rgb(1, 176, 97); width: 1092px; height: 250px; text-align: center;">
	    <span style="color: white; font-size: 2.5em;font-family: 'bikoregular', Arial, serif;"><br/>Compteur avant le lancement de la campagne BDE !</span> <br/> <br/>
		    <div style="position: relative; margin-left: 320px;">
		    <script type="application/javascript">
			/*
			1 hour = 3600 seconds
			1 day = 86400 seconds
			1 week = 604800 seconds
			1 month = 2629744 seconds 
			1 year = 31556926 seconds
			*/
			
			var target_date = new Date("Febuary 4, 2015 18:00:00").getTime();
			var current_date = new Date().getTime();
			var seconds_left = (target_date - current_date) / 1000;
			
			var myCountdown1 = new Countdown({
											 	time : seconds_left,
												width:440, 
												height:80,
												style:"flip",
												rangeHi:"month"
												});
			
			</script>
			</div>
	    </div>
	    <section id="main_page">
	    	<img style="width: 1089px;" src="../../img_kar/le_crew.png" />
					<ul id="slideContact1">
						<li></li><li></li><li></li><li></li><li></li>
					</ul>
					<ul id="slideContact2">
						<li></li><li></li><li></li><li></li><li></li>
					</ul>
					<ul id="slideContact3">
						<li></li><li></li><li></li><li></li><li></li>
					</ul>
					<ul id="slideContact4">
						<li></li><li></li><li></li><li></li><li></li>
					</ul>
					<ul id="slideContact5">
						<li></li><li></li><li></li><li></li><li></li>
					</ul>
					<ul id="slideContact6">
						<li></li><li></li><li></li><li></li><li></li>
					</ul>
					<ul id="slideContact7">
						<li></li><li></li><li></li><li></li><li></li>
					</ul>
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
