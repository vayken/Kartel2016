<?php 
header('Content-Type: text/html; charset=utf8');
?>

<!DOCTYPE html>

<html>
	<head>
	<meta charset="utf-8" />
	<title>Pougne quizz</title>
    <link rel="stylesheet" href="style_quizz_remplissage.css" />
	</head>
	<body>
	<section>
		<div id="main">
		<h1>Quizz Pougne</h1>
		<p>
			<strong>Voici comment remplir chaque questions</strong> :  <br/><br/>
			- Ecrire la question dans le champ indiqué <br/>
			- Déterminer le type de réponse (choix multiple, choix unique) <br/>
			- Déterminer le nombre de choix pour la réponses (de 2 à 10) <br/>
			- Cochez le(s) case(s) à coté des réponses correctes <br/>
			- Ecrire l'explication à fournir à l'étudiant concernant la/les réponse(s) juste(s) <br/>
			
			<pre>
Pour écrire les formules de math, veuillez mettre entre '$$' TOUTE la ligne que
vous voulez écrire. Voici la synthaxe:
			
- espace : \;

- fraction a/b : \frac{a}{b}
			
- puissance a^b : a^{b}
			
- grosse parenthese sur fraction (a/b) : \left( \frac{a}{b} \right)
			
par exemple, pour écrire x = (a/b)^5 on a:
			
$$ x = \left( \frac{a}{b} \right)^{5} $$
			</pre>

		</p>

		<?php
			$titreQuizz = isset($_POST['titre_quizz']) ? addslashes(htmlspecialchars($_POST['titre_quizz'])) : 'none';
			$nbQuestions = isset($_POST['nb_questions']) ? (int)addslashes(htmlspecialchars($_POST['nb_questions'])) : 0;
			echo '<form name="quizz" method="post" action="quizz_saving_page.php?tQ='. $titreQuizz .'&nbQ='. $nbQuestions .'">';
			echo '<p><h1 style="color: blue">Titre du Quizz : '. $titreQuizz .'</h1></p>';

		for($numQuizz = 1; $numQuizz <= $nbQuestions ; $numQuizz++)
		{	
		?>
		<br/>
		<?php
			echo '<div id= "bloc_question'. $numQuizz .'" style="border: 5px solid red; padding: 10px;">';
				echo '<label for="question'. $numQuizz .'"> <h4 style="color: green">Question '. $numQuizz . '</h2> </label> <br />';
				echo '<textarea required rows="5" cols="50" placeholder="Ecrire une question ici" name="question'. $numQuizz .'" id="question'. $numQuizz .'"></textarea> <br />';
				
				echo '<label for="reponse_type'. $numQuizz .'"> type de réponse : </label>';
				echo '<select required name="reponse_type'. $numQuizz .'" id="reponse_type'. $numQuizz .'" onchange= "addAnswerFields('. $numQuizz .')">';
					echo '<option value="">veuillez choisir</option>';
					echo '<option value="choix_unique">choix unique</option>';
					echo '<option value="choix_multiple">choix multiple</option>';
				echo '</select> <br/>';
				
				echo '<label for="nb_reponses'. $numQuizz .'">nombre de choix : </label>';
				echo '<select required name="nb_reponses'. $numQuizz .'" id="nb_reponses'. $numQuizz .'" onchange= "addAnswerFields('. $numQuizz .')">';
				echo '<option value="">veuillez choisir</option>';
		?>

				<?php 
					for($rep = 2 ; $rep <= 10; $rep++)
		           		echo '<option value="'. $rep .'">'. $rep .'</option>';
		           	
				?>

				</select>
				<?php
				echo '<br /><br /><textarea required rows="5" cols="50" placeholder="Ecrire une explication pour la réponse ici" name="explication'. $numQuizz .'" id="explication'. $numQuizz .'"></textarea>';
				
				?>
				<br /><br /><br />
			</div>
				
		<?php 
		} 
		?>
	       		<br />
	       		<input type="submit" name="Envoyer" id="Envoyer" value="Envoyer" />
			</form>
			<form method="post" action="pougne_accueil.php">
	       		<input type="submit" name="Precedent" id="Precedent" value="Precedent" />
			</form>
		</div>
	</section>

    <script language="javascript">
	function addAnswerFields(question_index){
		var amount = (document.getElementById("nb_reponses" + question_index)).value;
		var type = (document.getElementById("reponse_type" + question_index)).value;
		divName = 'bloc_question' + question_index;
		/* removing the current fields */
		for(i = 1; i <= 10; i++){

          id = "field" + i + "q" + question_index;
          element = document.getElementById(id);
          if(element != null)
		  	element.parentNode.removeChild(element);
      	}
		/* Adding the fields */
		for(i = 1; i <= amount; i++){
          newdiv = document.createElement('div');
          newdiv.id = "field" + i + "q" + question_index;
          //X reponse index
          //Y question index
          //id for each answer repXqY
          newdiv.innerHTML = '<label for="rep' + i + 'q' + question_index + '">Réponse ' + i + ' : <br/><textarea rows="5" cols="50" required id="rep' + i + 'q' + question_index+ '" name="rep' + i + 'q' + question_index+ '" placeholder="Entrez une reponse ici"></textarea></label>';
          //name = rep_questY pour radio et repX et repXqYright si c'est une bonne réponse
          if(type == "choix_unique")
          	newdiv.innerHTML += '<input required type="radio" name ="' + 'rep_quest' + question_index + '" id="' + 'rep_quest' + question_index + '" value="rep' + i +'q' + question_index + 'right"/>';
          else if(type == "choix_multiple")
          	newdiv.innerHTML += '<input type="checkbox" name="rep' + i +'q' + question_index + 'right" />';
          
          document.getElementById(divName).appendChild(newdiv);
			//$('<p><label for="rep' + i + 'q' + question_index+ '"><input type="text" id="rep' + i + 'q' + question_index+ '" size="20" name="rep' + i + 'q' + question_index+ '" value="" placeholder="Entrez une reponse ici" /></label></p>').appendTo(divId);
		}
	}
</script>
	</body>
	
</html>