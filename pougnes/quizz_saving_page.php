

<!DOCTYPE html>

<html>
	<head>
	<meta charset="utf-8" />
	<title>Pougne quizz</title>
    <link rel="stylesheet" href="style_pougne.css" />
	</head>
	<?php 
		if(isset($_GET['nbQ']) && $_GET['nbQ'] <= 20)
		{
		?>
	<body>
	<?php 
		include_once 'database/database_saving.php';
	?>
	<section>
		<div id="main">
		<h1>Quizz Pougne</h1>
		<p>
			Le quizz sur ce chapitre a bien été ajouté. Pour voir le résultat, retournez sur l'accueil, et 
			cliquez sur les chapitres que vous voulez voir, et vous aurez accès au quizz
		</p>
		<form method="post" action="liste_chapitres.php">
	       	<input type="submit" name="Envoyer" id="Envoyer" value="Revenir à l'accueil" />
		</form>
		</div>
	</section>
	<?php } ?>
	</body>
	
</html>