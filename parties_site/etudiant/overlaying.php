
	<div id="overlay"></div>
    <script>
		
        var links = document.getElementsByTagName('a'),
            linksLen = links.length;


            links[linksLen - 1].onclick = function() { 
                displayImg(this);           
                return false;              
            };


        function displayImg(link) {

            var img = new Image(),
                overlay = document.getElementById('overlay');
			
            img.onload = function() {
                overlay.innerHTML = '<iframe style="position: fixed; left: 25%; top: 20%; width:50%; height:60%;" width="640" height="360" src="//www.youtube.com/embed/4DEgrwUoRhM?feature=player_embedded" frameborder="0" allowfullscreen></iframe>';

                //overlay.appendChild(img);
            };

            img.src = link.href;
            overlay.style.display = 'block';

        }
		
        document.getElementById('overlay').onclick = function() {
            this.style.display = 'none';
        };

    </script>