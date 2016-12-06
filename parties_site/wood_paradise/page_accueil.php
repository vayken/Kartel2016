<!DOCTYPE html>

<html>
	 <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style_site_web_pro.css" />
        <title>The Wood Paradise</title>
        <script src="../../script/jquery.js" type="text/javascript"></script>
		<script language="javascript" src="../../script/diapoSlideShow.js"></script>
		
        <link rel="stylesheet" type="text/css" href="../carousel/jcarousel.basic.css">
        <script type="text/javascript" src="../carousel/jquery.jcarousel-autoscroll.min.js"></script>
        <script type="text/javascript" src="../carousel/jquery.jcarousel.min.js"></script>
        <script type="text/javascript" src="../carousel/jcarousel.data-attributes.js"></script>
        <script src="../../script/countdown.js"></script>
    </head>

    <body>
	    <?php 
	    	include "design_header.php";
	    ?>
	    <nav>
	    	<div id="photo_liste">
		        <div class="wrapper">
		
		            <div class="jcarousel-wrapper">
		                <div data-jcarousel="true" data-wrap="circular" class="jcarousel" style="height: 600px;">
		                    <ul>
		                        <li><img src="diapo/1.jpg" width="1089" height="600" alt=""></li>
		                        <li><img src="diapo/2.jpg" width="1089" height="600" alt=""></li>
		                        <li><img src="diapo/3.jpg" width="1089" height="600" alt=""></li>
		                        <li><img src="diapo/4.jpg" width="1089" height="600" alt=""></li>
		                        <li><img src="diapo/5.jpg" width="1089" height="600" alt=""></li>
		                        <li><img src="diapo/6.jpg" width="1089" height="600" alt=""></li>
		                        <li><img src="diapo/7.jpg" width="1089" height="600" alt=""></li>
		                        <li><img src="diapo/8.jpg" width="1089" height="600" alt=""></li>
		                        <li><img src="diapo/9.jpg" width="1089" height="600" alt=""></li>
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
	    <section id="main_page" style="height: 1050px;">
			    <p style="padding-right: 30px; padding-left: 30px;">Spécialistes du mobilier personnalisable respectueux de l’environnement pour petits professionnels et particuliers.
			    </p>
			    <p style="padding-right: 30px; padding-left: 30px;"><span style="color: rgb(128, 175, 16);" >Avec des matières premières respectueuses de l'environnement sous label FSC et PEFC</span><span style="color: rgb(159, 168, 164);" >, The Wood Paradise vous propose des meubles entièrement personnalisables de haute qualité.
			    </span></p>
			    <p style="padding-right: 30px; padding-left: 30px;"><span style="color: rgb(159, 168, 164);" >Le professionnalisme de nos partenaires et leur expérience vous assurent des produits robustes et esthétiques.</span>
			    </p>

			    <br/>
			    <br/>
			<div style="text-align: center"><iframe width="560" height="315" src="https://www.youtube.com/embed/tHKwyvqrGGY" frameborder="0" allowfullscreen></iframe></div>
	    </section>
	    <?php 
	    	include "design_footer.php";
	    ?>
    </body>
</html>
