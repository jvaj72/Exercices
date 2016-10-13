<?php

class Client {

	private $nom;
	private $prenom;
	private $dateNaissance;
	private $adresse;
	private $cp;
	private $ville;
	private $pays;
	private $voitures;
	private $bateaux;

	public function __construct($nom, $prenom, $dateNaissance, $adresse, $cp, $ville, $pays, $voitures = array(), $bateaux = array()){

		$this->nom = $nom;
		$this->prenom = $prenom;
		$this->dateNaissance = $dateNaissance;
		$this->adresse = $adresse;
		$this->cp = $cp;
		$this->ville = $ville;
		$this->pays = $pays;
		$this->bateaux = $bateaux;
		$this->voitures = $voitures;
	}

	public function getNom(){
		return $this->nom;
	}

	public function setNom($nom){
		$this->nom = $nom;
	}

	public function getPrenom(){
		return $this->prenom;
	}

	public function setPrenom($prenom){
		$this->prenom = $prenom;
	}

	public function getDateNaissance(){
		return $this->dateNaissance;
	}

	public function setDateNaissance($dateNaissance){
		$this->dateNaissance = $dateNaissance;
	}

	public function getAdresse(){
		return $this->adresse;
	}

	public function setAdresse($adresse){
		$this->adresse = $adresse;
	}

	public function getCp(){
		return $this->cp;
	}

	public function setCp($cp){
		$this->cp = $cp;
	}

	public function getVille(){
		return $this->ville;
	}

	public function setVille($ville){
		$this->ville = $ville;
	}

	public function getPays(){
		return $this->pays;
	}

	public function setPays($pays){
		$this->pays = $pays;
	}

	public function getVoitures(){
		return $this->voitures;
	}

	public function setVoitures($voitures){

		foreach ($voitures as $voiture) {

			if(empty($voiture->getClient())){
				$voiture->setClient($this);
			}

		}

		$this->voitures = $voitures;
	}

	public function getBateaux(){
		return $this->bateaux;
	}

	public function setBateaux($bateaux){

		$this->bateaux = $bateaux;

		foreach ($this->bateaux as $bateau) {

			if(empty($bateau->getClient())){
				$bateau->setClient($this);
			}

		}

	}

}