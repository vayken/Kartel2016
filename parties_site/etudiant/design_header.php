<header>
			<script src="../../script/bgaudioplayer.js"></script>
		    <audio id="mybgplayer">
		    <source src="musique/1.mp3" type="audio/mpeg">
		    </audio>
	    	<div id="mybgplayerui" class="bgplayerui">
			<img class="play" src="sprites/butt.png" data-pausesrc="sprites/butt_no.png" style="position: absolute; top: 56px; left: 733px;" />
			</div>
		    <script>
		
		    var playerinstance=bgaudioplayer({
		    	
		    	audioid: 'mybgplayer', // id of audio element
		    	audiointerface: 'mybgplayerui', // id of corresponding UI div
		    	autoplay: true, // auto play music?
		    	persistTimeLine: true, // Persist player's current timeline/ volume when moving from page to page?
		    	volume: 0.1, // Default volume (0.0 to 1.0)
		    	volumelevels: 15 // # of volume bars to show in UI
		    })
		
		    </script>
	    	<div id="barre_noir">
	    	<?php if(!$guest) {?>
	    		<span style="color: black; font-family: 'bikoregular', Arial, serif; margin-left: 10px;display: inline-block; font-size: 1.5em; line-height: 38px; height: 38px;">Hello, <?php echo $user_profile['name']; ?></span>
		    <?php } else { ?>
	    		<span style="color: black; font-family: 'bikoregular', Arial, serif; margin-left: 10px;display: inline-block; font-size: 1.5em; line-height: 38px; height: 38px;">Hello, jeune étudiant(e)</span>
		    
		    <?php }?>
		    	<ul id="interieur_barre_noir_liste">
		    		<li class="interieur_barre_noir"><a href=""><img src="sprites/tumblr.png" /></a></li>
		    		<li class="interieur_barre_noir"><a href="https://twitter.com/Kartel2015"><img src="sprites/twitter.png" /></a></li>
		    		<li class="interieur_barre_noir"><a href="https://www.youtube.com/channel/UCIuSETYrR-kVEE9HAKOpU2g"><img src="sprites/youtube.png" /></a></li>
		    		<li class="interieur_barre_noir"><a href="https://www.facebook.com/karteltmsp?fref=ts"><img src="sprites/facebook.png" /></a></li>
		    	</ul>
	    	</div>
	    	<div id="header_kartel">
	    	<?php if(!$guest) {?>
	    	<img style="margin-left: 5px;margin-top: 4px;height: 170px;" src="https://graph.facebook.com/<?php echo $user_profile['id'];?>/picture?type=large" />
	    	<?php } ?>
	    	<pre>
	    	
	    	</pre>
	    	</div>
	    	<div id="bloc_liste_nav">
		    	<ul id="liste_nav">
		    		<li class="bouton_nav"><a href="page_accueil.php<?php echo ($guest? '?guest=1' : '');?>">Accueil</a></li>
		    		<li class="bouton_nav"><a href="page_dejeuner.php<?php echo ($guest? '?guest=1' : '');?>">Petit déj</a></li>
		    		<li class="bouton_nav"><a href="actu.php<?php echo ($guest? '?guest=1' : '');?>">Actu</a></li>
		    		<li class="bouton_nav"><a href="karlos.php<?php echo ($guest? '?guest=1' : '');?>">Karlos</a></li>
		    		<li class="bouton_nav"><a href="events.php<?php echo ($guest? '?guest=1' : '');?>">Events</a></li>
		    		<li class="bouton_nav"><a href="pougnes.php<?php echo ($guest? '?guest=1' : '');?>">Pougnes</a></li>
		    		<li class="bouton_nav"><a href="videos.php<?php echo ($guest? '?guest=1' : '');?>">Vidéos</a></li>
		    		<li class="bouton_nav"><a href="contact.php<?php echo ($guest? '?guest=1' : '');?>">Contact</a></li>
		    	</ul>
	    	</div>
	    </header>