<?php 
		include_once 'petit_dej.php';
		$tableauDonnees = array();
		/* Sauvegarde des données dans la base de donnée */
	 	include_once 'database_connect.php';
	 	
			$petit_dej = new PetitDej(
					format($_POST['prenom']),
					format($_POST['nom']),
					format($_POST['numTel']),
					format($_POST['mail']),
					format($_POST['typeBatiment']),
					format($_POST['adresse']),
					format($_POST['coloc']),
					format($_POST['heureLivraison']),
					format('non traite'),
					format($_POST['commentaires'])
					);
			$req = $bdd->prepare('SELECT mail, ip, menu FROM ptitdej WHERE mail = ?');
			$req->execute(array($petit_dej->getMail()));
			$counter = 0;
			$success = 1;
			while($donnees = $req->fetch()){
				$counter++;
				if($donnees['menu'] == 'traite') $success = 0;
			}
			if($success > 0){
				if($counter > 0){
					$req = $bdd->prepare('DELETE FROM ptitdej WHERE mail = ?');
					$req->execute(array($petit_dej->getMail()));
				}
					$cle = md5(microtime(TRUE)*100000);
					$bdd->exec("SET NAMES 'utf8'");
					$bdd->exec('INSERT INTO ptitdej(prenom, nom, numTel, mail, typeBatiment, adresse, colocNom, heureLivraison, menu, commentaires, ip)
							 VALUES(\''. $petit_dej->getPrenom() .'\', \''. $petit_dej->getNom() .'\', \''. $petit_dej->getNumTel() .'\', \''. $petit_dej->getMail() .'\', \''. $petit_dej->getTypeBatiment() .'\', \''. $petit_dej->getAdresse() .'\', \''. $petit_dej->getColocNom() .'\'
							, \''. $petit_dej->getHeureLivraison() .'\', \''. $petit_dej->getMenu() .'\', \''. $petit_dej->getCommentaires() .'\', \''. $cle .'\')');
			}
			
			//backup	
	?>