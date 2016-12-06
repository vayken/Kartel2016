<?php
class Question
{
	private $enonce;
	private $typeReponse;
	private $nbChoix;
	private $explication;
	private $reponses = array();
	
	
	public function __construct($enonce, $typeReponse, $nbChoix, $explication, $reponses)
	{
		$this->enonce = $enonce;
		$this->typeReponse = $typeReponse;
		$this->nbChoix = $nbChoix;
		$this->explication = $explication;
		$this->reponses = $reponses;
	}
	
	public function getEnonce()
	{
		return $this->enonce;
	}
	
	public function getTypeReponse()
	{
		return $this->typeReponse;
	}
	
	public function getNbChoix()
	{
		return $this->nbChoix;
	}
	
	public function getExplication()
	{
		return $this->explication;
	}
	
	public function getReponses()
	{
		return $this->reponses;
	}
	
	
	
}
class Reponse
{
	private $reponse;
	private $estVrai;
	
	public function __construct($reponse, $estVrai)
	{
		$this->reponse = $reponse;
		$this->estVrai = $estVrai;
	}
	
	public function getReponse()
	{
		return $this->reponse;
	}
	
	public function estVrai()
	{
		return $this->estVrai;
	}
	
	
}
?>