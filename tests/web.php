<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8" />
		<title>Mon site de bg</title>
	</head>
	<body>


		<?php

		$personne = array("nom" => "Vibert", "age" => 21, "bogoss" => true, "sexe" => "masculin");

		foreach($personne as $label => $det){
			echo "<pre>" . false . " => " . $det . "</pre>";
		}

		print_r($personne);
		?>
		<p>
			<?php 
				if(isset($_GET['nom']) && isset($_GET['prenom']))
				echo "Bonjour" . $_GET['nom'] . ' ' . $_GET['prenom'];

				echo "Wesh ". htmlspecialchars($_POST['prenom']) .".";

				if(isset($_POST['a_des_amis']))
					echo 'Tu as des amis! bravo!';
				else
					echo 'Tu n\'as pas d\'amis boloss mdr';
				echo '<br />';

				if(isset($_POST['bogoss']))
					echo $_POST['bogoss'] . ', t\'est' . ($_POST['bogoss'] == 'nan' ? ' pas' : '') . ' un bogoss <br />';

				if(isset($_POST['pays']))
					echo 'Tu viens de '. $_POST['pays'] . ', très beau pays effectivement lol <br />';

				if(isset($_POST['texte_ici']))
					echo 'Voila le texte que t\'as tapé : <br />' . $_POST['texte_ici'] ;
			?>

/* retirer les balises html : strip_tags , les montrer en tant que tel : htmlspecialchars
	strlen, str_replace, str_shuffle
	array, array_key_exists, in_array, array_search
	enctype="multipart/form-data" en attribu a form pour envoyer des fichiers*/
	</body>
</html>