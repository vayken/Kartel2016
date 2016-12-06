<?php
	
	include_once 'database/database_connect.php';
	include_once 'classes/question.php';
	$bdd->exec("SET NAMES 'utf8'");
	$req = $bdd->prepare('SELECT * FROM quizz WHERE Titre = ?');
	$req->execute(array($titre));
	$counter = 0;
	while ($donnees = $req->fetch())
	{
		for($i = 1; $i <= 10; $i++)
			$reponses[$i - 1] = new Reponse($donnees['r'. $i], $donnees['r'. $i . 'right']);
		$questions[$counter] = new Question(
				$donnees['enonce'], $donnees['type'], $donnees['nbReponses'], $donnees['explication'], $reponses);
		$counter++;
	}
	
	$req->closeCursor();

?>
