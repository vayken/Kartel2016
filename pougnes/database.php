

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
    <link rel="stylesheet" href="style.css" />
	</head>
	
	<body>
	<section>
		<div>
		<h1>Quizz Pougne</h1>
		<p>
			Voici la page ou vous pourrez mettre en place des differents quizz pour les pougnes TSP & TEM.
			Choisissez le nombre de questions, ensuite remplissez les champs correspondants aux questions du quizz et aux
			reponses possibles, il n'existe qu'une seule reponse a chaque question. Cochez la case a cote de la 
			reponse qui est correcte pour chaque question.
		</p>
			<form method="post" action="quizlist.php">
				<label for="nbquestion">Combien de questions voulez vous dans le quizz? </label><select name="nbquestions" id="nbquestions">
				<?php 
					for($question = 1 ; $question <= 20; $question++)
		           		echo '<option value="q'. $question .'">'. $question .'</option>';
				?>
	       		</select>
	       		<input type="submit" name="Envoyer" id="Envoyer" value="Envoyer" />
			</form>
			<br />
			<img src= "img_kar/kaktus.jpg" alt="kartel_logo" class="logo"/>
		</div>
	</section>
	</body>
	
</html>