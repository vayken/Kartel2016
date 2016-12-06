

<!DOCTYPE html>

<?php
/*
$db = new PDO('mysql:host=localhost;dbname=test', 'root', '');

$reponse = $db->prepare('SELECT * FROM jeux_video WHERE console = :console');
$reponse->execute(array('console' =>'Xbox'));
while($donnee = $reponse->fetch())
{
	echo $donnee['nom'] . ' qui vaut ' . $donnee['prix'] . ' euros';
	echo '<br />';
}
*/
?>
<html>
	<head>
	<meta charset="utf-8" />
	<title>Pougne quizz</title>
    <link rel="stylesheet" href="style_pougne.css" />
	</head>
	
	<body>
	<section>
		<div id="main">
		<h1>Quizz Pougne</h1>
		<p>
			Voici la page ou vous pourrez mettre en place des differents quizz pour les pougnes TSP & TEM.
			Choisissez le chapitre, le nombre de questions, ensuite remplissez les champs correspondants aux questions du quizz et aux
			reponses possibles, Cochez la case a cote de la/les reponse(s) qui est/sont correcte pour chaque(s) question(s).
		</p>
			<form method="post" action="quizzlist.php">
				<label for="titre_quizz">Quel est le titre du Quizz? </label><input type="text" name="titre_quizz" id="titre_quizz" required /> <br />
				<label for="nb_questions">Combien de questions voulez vous dans le quizz? </label>
				<select name="nb_questions" id="nb_questions">
				<?php 
					for($question = 1 ; $question <= 20; $question++)
		           		echo '<option '. ($question == 1 ? 'selected' : '') .'value="'. $question .'">'. $question .'</option>';
				?>
	       		</select>
	       		<br />
	       		<input type="submit" name="Envoyer" id="Envoyer" value="Envoyer" />
			</form>
			<br />
			<img src= "../img_kar/kaktus.jpg" alt="kartel_logo" class="logo"/>
		</div>
	</section>
	</body>
	
</html>