<?php
ini_set('SMTP','smtp.kartel2014');
$mail = $petit_dej->getMail(); // Déclaration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}
//=====Déclaration des messages au format texte et au format HTML.
$message_html = "<html><head><meta charset=\"utf-8\" /></head><body>
		<p>Bonjour, Vous venez de commander un ptit dej' chez Kartel, veuillez cliquer sur ce lien pour confirmer votre demande : </p>
		<p>
		nom : ". $petit_dej->getNom() ."<br/>
		prenom : ". $petit_dej->getPrenom() ."<br/>
		telephone : ". $petit_dej->getNumTel() ."<br/>
		batiment : ". $petit_dej->getTypeBatiment() ."<br/>
		adresse : ". $petit_dej->getAdresse() ."<br/>
		heure de livraison : ". $petit_dej->getHeureLivraison() ."<br/>
		commentaires : ". $petit_dej->getCommentaires() ."<br/>
		</p>
		<a href=\"http://kartel2015.fr/parties_site/etudiant/validation_dejeuner.php?key=". $cle ."\">Confirmation de commande</a>
		<p>PS: Si il y a une erreur dans la commande, vous pouvez toujours la refaire, sauf si vous l'avez confirme</p>
		</body></html>";
//==========

//=====Création de la boundary
$boundary = "-----=".md5(rand());
//==========

//=====Définition du sujet.
$sujet = "Commande petit dejeuner Kartel !";
//=========

//=====Création du header de l'e-mail.
$header = "From: \"Kartel\"<". $petit_dej->getMail() .">".$passage_ligne;
$header.= "Reply-to: \"Kartel\" <". $petit_dej->getMail() .">".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========

//=====Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format texte.
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format HTML
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========

//=====Envoi de l'e-mail.
mail($mail,$sujet,$message,$header);
//==========
?>