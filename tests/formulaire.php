<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8" />
		<title>Formulaire d'accès</title>
	</head>

	<body>
		<form method="post" action="secret.php">
			<label for="pass">Entrez le mot de passe : <input type="password" name="pass" id="pass" /></label>
			<input type="submit" value="Envoyer" />
		</form>
			<?php 
				if(isset($_GET['w']) && $_GET['w'])
					echo '<br /><div style="color: red"> Le mot de passe entré est incorrect.</div>';
			?>
	</body>
</html>