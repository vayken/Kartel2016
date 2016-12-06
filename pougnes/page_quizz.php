<?php header('Content-type: text/html; charset=UTF-8'); ?>
<!DOCTYPE html>

<html>
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Pougne quizz</title>
    <link rel="stylesheet" href="style_page_principale.css" />
    <script type="text/javascript"
	   src="mathjax/MathJax.js?config=TeX-AMS-MML_HTMLorMML&delayStartupUntil=configured">
	</script>
	</head>
	<body>
		<div id="main">
		<h1>Quizz Pougne</h1>
			<?php 
			
			if(isset($_POST['titre_quizz_delete']))
			{
	 			include_once 'database/database_connect.php';
				$bdd->exec('DELETE FROM quizz WHERE Titre=\''. addslashes(htmlspecialchars($_POST['titre_quizz_delete'])) .'\'');
				header('Location: liste_chapitres.php');  
			} else {
			$titre = isset($_POST['titre_quizz']) ? htmlspecialchars($_POST['titre_quizz']) : 'None';
			include_once 'database/database_loading.php';
			$counterQ = 1;
			echo '<h2>'. $titre .'</h2>';
			echo '<form method="post" action="quizzCorrection.php">';
			foreach($questions as $q)
			{
				echo '<p><h3>Question '. $counterQ . '</h3></p>';
				echo '<div style="border-top: 1px solid black;">';
				echo '<br/><strong>' . $q->getEnonce() . '</strong>';
				
				echo '<p>';
				$counterR = 1;
				foreach($q->getReponses() as $reponse)
				{
					echo '<p>';
					if($reponse->getReponse() == 'none') break;
					if($q->getTypeReponse() == 'choix_unique')
						echo '<input type="radio" name="etudiant-q' . $counterQ . '" value="etudiant-rep' . $counterR . 'q' . $counterQ . '" />';
					else if($q->getTypeReponse() == 'choix_multiple')
						echo '<input type="checkbox" name="etudiant-rep' . $counterR . 'q' . $counterQ . '" />';
					echo '<div id="reponse"><label>' . $counterR . ') ' . $reponse->getReponse() .'</label></div></p> <br/>';
					$counterR++;
				}
				echo '</p>';
				/* OUAIS VOILA ENFIN LA TU FAIS TA MISE EN PAGE DU QUIZZ ENCULER*/
				
				$counterQ++;
				echo '</div>';
			}
				echo '<input type="submit" value="Envoyer" id="Envoyer" />';
				echo '</form>';
				
			?>
			<form method="post" action="liste_chapitres.php">
				<p><button>Revenir à la liste des chapitres</button></p>
			</form>
		<?php 
			}
		?>
		</div>
	</body>
	<script type="text/javascript">
  		MathJax.Hub.Configured()
	</script>
</html>