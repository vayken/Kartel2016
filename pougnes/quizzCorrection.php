
<!DOCTYPE html>

<html>
	<head>
	<meta charset="utf-8" />
	<title>Pougne quizz</title>
    <link rel="stylesheet" href="style_page_principale.css" />
	</head>
	<body>
	<?php 
		include_once 'database/database_loading.php';
	?>
		<div id="main">
		<h1>Quizz Pougne</h1>
		
			<?php 
			$counterQ = 0;
			$counterR = 0;
			foreach($questions as $q)
			{
				foreach($q->getReponses() as $reponse)
				{
					$counterR++;
				}
				$counterQ++;
			}
				
			?>
			
		</form>
		</div>
	</body>
	
</html>