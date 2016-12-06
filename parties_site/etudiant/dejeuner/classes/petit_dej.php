<?php
class PetitDej
{
	private $prenom;
	private $nom;
	private $numTel;
	private $mail;
	private $typeBatiment;
	private $adresseLivraison;
	private $colocNom;
	private $heureLivraison;
	private $menuLivraison;
	private $commentaires;
	
	
	public function __construct($prenom, $nom, $numTel, $mail, $typeBatiment, $adresseLivraison, $colocNom, $heureLivraison, $menuLivraison, $commentaires)
	{
		$this->prenom = $prenom;
		$this->nom = $nom;
		$this->numTel = $numTel;
		$this->mail = $mail;
		$this->typeBatiment = $typeBatiment;
		$this->adresseLivraison = $adresseLivraison;
		$this->colocNom = $colocNom;
		$this->heureLivraison = $heureLivraison;
		$this->menuLivraison = $menuLivraison;
		$this->commentaires = $commentaires;
	}
	
	public function getPrenom()
	{
		return $this->prenom;
	}
	
	public function getNom()
	{
		return $this->nom;
	}
	
	public function getNumTel()
	{
		return $this->numTel;
	}
	
	public function getMail()
	{
		return $this->mail;
	}
	
	public function getTypeBatiment()
	{
		return $this->typeBatiment;
	}
	
	public function getAdresse()
	{
		return $this->adresseLivraison;
	}
	
	public function getColocNom()
	{
		return $this->colocNom;
	}
	
	public function getHeureLivraison()
	{
		return $this->heureLivraison;
	}
	
	public function getMenu()
	{
		return $this->menuLivraison;
	}
	
	public function getCommentaires()
	{
		return $this->commentaires;
	}
	
	
	
}
?>