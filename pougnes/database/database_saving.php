<?php 
		include_once 'classes/question.php';
		/* Recuperation des données du quizz */
		$nbQuestions = isset($_GET['nbQ']) ? (int)addslashes(htmlspecialchars($_GET['nbQ'])) : 0;
		$titreQuizz = isset($_GET['tQ']) ? addslashes(htmlspecialchars($_GET['tQ'])) : 'None';
		$tableauDonnees = array();
		/* Sauvegarde des données dans la base de donnée */
	 	include_once 'database/database_connect.php';
		for($numQuestion = 1; $numQuestion <= $nbQuestions; $numQuestion++)
		{
			$reponses = array();
			for($rep = 1; $rep <= 10; $rep++)
			{
				if(addslashes(htmlspecialchars($_POST['reponse_type'. $numQuestion])) == 'choix_unique')
				{
					$right = isset($_POST['rep_quest' . $numQuestion]) && addslashes(htmlspecialchars($_POST['rep_quest' . $numQuestion])) == 'rep' . $rep .'q' . $numQuestion . 'right' ? 1 : 0;
				}
				else
				{
					$right = isset($_POST['rep' . $rep .'q' . $numQuestion . 'right']) ? 1 : 0;
				}
				$reponses[$rep-1] = new Reponse(
						isset($_POST['rep'. $rep . 'q' . $numQuestion]) ? addslashes(htmlspecialchars($_POST['rep'. $rep . 'q' . $numQuestion])) : 'none',
						$right);
				
			}
			$question = new Question(
					htmlspecialchars(addslashes($_POST['question'. $numQuestion])),
					htmlspecialchars(addslashes($_POST['reponse_type'. $numQuestion])),
					htmlspecialchars(addslashes($_POST['nb_reponses'. $numQuestion])),
					htmlspecialchars(addslashes($_POST['explication'. $numQuestion])),
					$reponses);
			$tableauDonnees[$numQuestion-1] = $question;
			$bdd->exec("SET NAMES 'utf8'");
			$bdd->exec('INSERT INTO quizz(titre, enonce, type, nbReponses, explication, r1, r2, r3, r4, r5, r6, r7, r8, r9, r10, r1right, r2right, r3right, r4right, r5right, r6right, r7right, r8right, r9right, r10right)
					 VALUES(\''. $titreQuizz .'\', \''. $tableauDonnees[$numQuestion-1]->getEnonce() .'\', \''. $tableauDonnees[$numQuestion-1]->getTypeReponse() .'\', \''. $tableauDonnees[$numQuestion-1]->getNbChoix() .'\', \''. $tableauDonnees[$numQuestion-1]->getExplication() .'\'
					, \''. $tableauDonnees[$numQuestion-1]->getReponses()[0]->getReponse() .'\', \''. $tableauDonnees[$numQuestion-1]->getReponses()[1]->getReponse() .'\', \''. $tableauDonnees[$numQuestion-1]->getReponses()[2]->getReponse() .'\'
					, \''. $tableauDonnees[$numQuestion-1]->getReponses()[3]->getReponse() .'\', \''. $tableauDonnees[$numQuestion-1]->getReponses()[4]->getReponse() .'\', \''. $tableauDonnees[$numQuestion-1]->getReponses()[5]->getReponse() .'\'
					, \''. $tableauDonnees[$numQuestion-1]->getReponses()[6]->getReponse() .'\', \''. $tableauDonnees[$numQuestion-1]->getReponses()[7]->getReponse() .'\', \''. $tableauDonnees[$numQuestion-1]->getReponses()[8]->getReponse() .'\'
					, \''. $tableauDonnees[$numQuestion-1]->getReponses()[9]->getReponse() .'\'
					, \''. $tableauDonnees[$numQuestion-1]->getReponses()[0]->estVrai() .'\', \''. $tableauDonnees[$numQuestion-1]->getReponses()[1]->estVrai() .'\', \''. $tableauDonnees[$numQuestion-1]->getReponses()[2]->estVrai() .'\'
					, \''. $tableauDonnees[$numQuestion-1]->getReponses()[3]->estVrai() .'\', \''. $tableauDonnees[$numQuestion-1]->getReponses()[4]->estVrai() .'\', \''. $tableauDonnees[$numQuestion-1]->getReponses()[5]->estVrai() .'\'
					, \''. $tableauDonnees[$numQuestion-1]->getReponses()[6]->estVrai() .'\', \''. $tableauDonnees[$numQuestion-1]->getReponses()[7]->estVrai() .'\', \''. $tableauDonnees[$numQuestion-1]->getReponses()[8]->estVrai() .'\'
					, \''. $tableauDonnees[$numQuestion-1]->getReponses()[9]->estVrai() .'\')');
			//backup
		}
		
	?>