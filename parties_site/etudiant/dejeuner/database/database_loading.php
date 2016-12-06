<?php
	
	include_once 'database_connect.php';
	include_once 'petit_dej.php';
	$bdd->exec("SET NAMES 'utf8'");
	$req = $bdd->prepare('SELECT * FROM ptitdej WHERE ip = ?');
	$req->execute(array($keys));
	while ($donnees = $req->fetch())
	{
		$petit_dej_table = new PetitDej(
				$donnees['prenom'], $donnees['nom'], $donnees['numTel'], $donnees['mail'], $donnees['typeBatiment'], $donnees['adresse'], $donnees['colocNom'], $donnees['heureLivraison'], $donnees['menu'], $donnees['commentaires']);
		
		
	}
	
	$req->closeCursor();

?>
