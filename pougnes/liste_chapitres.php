
<!DOCTYPE html>

<html>
	<head>
	<meta charset="utf-8" />
	<title>Pougne quizz</title>
    <link rel="stylesheet" href="style_page_principale.css" />
	</head>
	<body>
	<?php 
		/*Loading the titles of the database*/
	 	include_once 'database/database_connect.php';
		$reponse = $bdd->query('SELECT Titre FROM quizz');
	?>
		<div id="main">
		<h1>Quizz Pougne</h1>
		<p>
		Voici la liste des quizz disponibles. Veuillez choisir le chapitre que vous voulez étudier : 
		</p>
		<form action='page_quizz.php' method='post'>
		<?php 
			while ($donnees = $reponse->fetch())
			{
				echo '<p><button name="titre_quizz" value='. htmlspecialchars($donnees['Titre']) .'>'. htmlspecialchars($donnees['Titre']) .'</button>
    				<button name="titre_quizz_delete" value="'. htmlspecialchars($donnees['Titre']) .'">supprimer</button></p>';
			}
		?>
		</form>
		<form action='pougne_accueil.php' method='post'>
		<p><button>Ajouter</button></p>
		</form>
		
		</div>
	</body>
	
</html>
<?php

?>