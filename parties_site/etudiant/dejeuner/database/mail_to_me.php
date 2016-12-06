<?php
ini_set('SMTP','smtp.kartel2014');
$mail = ($petit_dej_table->getTypeBatiment() == 'coloc' || $petit_dej_table->getTypeBatiment() == 'autre') ? 'kartel2015c@gmail.com' : 'kartel2015nc@gmail.com'; // Déclaration de l'adresse de destination.
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
		<p>Bonjour, Voila une commande </p>
		<p>
		nom : ". $petit_dej_table->getNom() ."<br/>
		prenom : ". $petit_dej_table->getPrenom() ."<br/>
		telephone : ". $petit_dej_table->getNumTel() ."<br/>
		batiment : ". $petit_dej_table->getTypeBatiment() ."<br/>
		nom des coloc : ". $petit_dej_table->getColocNom() ."<br/>
		adresse : ". $petit_dej_table->getAdresse() ."<br/>
		heure de livraison : ". $petit_dej_table->getHeureLivraison() ."<br/>
		commentaires : ". $petit_dej_table->getCommentaires() ."<br/>
		</p>
		</body></html>";
//==========

//=====Création de la boundary
$boundary = "-----=".md5(rand());
//==========

//=====Définition du sujet.
$sujet = "Commande de ". $petit_dej_table->getNom() . " ". $petit_dej_table->getPrenom();
//=========

//=====Création du header de l'e-mail.
$header = "From: \"Kartel\"<kartel>".$passage_ligne;
$header.= "Reply-to: \"Kartel\" <kartel>".$passage_ligne;
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