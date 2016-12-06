<!DOCTYPE html>

<html>
	 <head>
        <meta charset="utf-8" />
        <link rel="stylesheet" href="style_site_web_pro.css" />
        <title>Wood Paradise</title>
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
	    		<img src="sprites/img.jpg" />

			    <pre> </pre><pre style="color: rgb(128, 175, 16); text-decoration:line-through;">            </pre>
			    <span style="color: rgb(128, 175, 16);">Poignée de meubles</span>
			    <pre style="color: rgb(128, 175, 16); text-decoration:line-through;">           </pre><br/><br/>
			<div style="text-align: center; font-size: 0.5em;">Retrouvez l'univers de nos poignées de meubles et boutons parmi une gamme étendue. Des poignées inox aux poignées chromées en passant par les poignées aluminium, vous pourrez personnaliser vos meubles de cuisine, salle de bain, comme vous le souhaitez avec un large choix de taille.</div>
				<br/>
			<ul id="slideContact1">
					<li><img style = "width : 60%; height: 60%;" src="trombi/a1.jpg" /></li>
					<li><img style = "width : 60%; height: 60%;"  src="trombi/a2.jpg" /></li>
					<li><img style = "width : 60%; height: 60%;" src="trombi/a3.jpg" /></li>
					<li><img style = "width : 60%; height: 60%;"  src="trombi/a6.jpg" /></li>
					<li><img style = "width : 60%; height: 60%;"  src="trombi/a4.jpg" /></li>
				</ul>
	    </section>
	    <?php 
	    	include "design_footer.php";
	    ?>
    </body>
</html>