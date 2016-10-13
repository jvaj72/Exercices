<?php

class Vehicule {

	protected $nom;
	protected $modele;
	protected $couleur;
	protected $annee;
	protected $client;
	private static $nombre = 0;

	public function __construct($nom, $modele, $couleur, $annee){
		$this->nom = $nom;
		$this->modele = $modele;
		$this->couleur = $couleur;
		$this->annee = $annee;
		self::$nombre++;
	}

	public function getNom(){
		return $this->nom;
	}

	public function setNom($nom){
		$this->nom = $nom;
	}

	public function getModele(){
		return $this->modele;
	}

	public function setModele($modele){
		$this->modele = $modele;
	}

	public function getCouleur(){
		return $this->couleur;
	}

	public function setCouleur($couleur){
		$this->couleur = $couleur;
	}

	public function getAnnee(){
		return $this->annee;
	}

	public function setAnnee($annee){
		$this->annee = $annee;
	}

	public static function getNombre(){
		return self::$nombre;
	}

	public static function setNombre($nombre){
		self::$nombre = $nombre;
	}

	public function getClient(){
		return $this->client;
	}

	public function setClient(Client $client){
		$this->client = $client;
	}




}