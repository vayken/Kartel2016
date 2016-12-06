<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8" />
		<?php 
			$password = "pass1234";
			$accessed = isset($_POST['pass']) && $_POST['pass'] == $password;
			if(!$accessed)
  				header('Location: formulaire.php?w=true');  
  				 ?>   
			<title>Page secrete</title>
	</head>

	<body>
		<?php
		if($accessed)
			echo '<p>Vous avez accès a la page secrète!</p>';
		?>
	</body>'
</html>