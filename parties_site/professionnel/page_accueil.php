<!DOCTYPE html>

<html>
	 <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style_site_web_pro.css" />
        <title>Kartel Site Professionnel</title>
        <script src="../../script/jquery.js" type="text/javascript"></script>
		<script language="javascript" src="../../script/diapoSlideShow.js"></script>
		<script language="javascript" src="contactSlideshow.js"></script>
		
        <link rel="stylesheet" type="text/css" href="../carousel/jcarousel.basic.css">
        <script type="text/javascript" src="../carousel/jquery.jcarousel-autoscroll.min.js"></script>
        <script type="text/javascript" src="../carousel/jquery.jcarousel.min.js"></script>
        <script type="text/javascript" src="../carousel/jcarousel.data-attributes.js"></script>
    </head>

    <body>
	    <?php 
	    	include "design_header.php";
	    ?>
	    <nav>
	    	<div id="photo_liste">
		        <div class="wrapper">
		
		            <div class="jcarousel-wrapper">
		                <div data-jcarousel="true" data-wrap="circular" class="jcarousel">
		                    <ul>
		                        <li><img src="diapo/1.png" width="1089" height="448" alt=""></li>
		                        <li><a href="voyages.php"><img src="diapo/2.png" width="1089" height="448" alt=""></a></li>
		                        <li><a href="programme.php"><img src="diapo/3.png" width="1089" height="448" alt=""></a></li>
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
	    <section id="main_page">
	    	<img src="../../img_kar/nos_membres.png" />
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
	    	include "design_footer.php";
	    ?>
    </body>
</html>
