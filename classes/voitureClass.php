<?php

class Voiture extends Vehicule {

	private $nbKmParcourus;
	private static $nbVoitures = 0;

	public function __construct($nom, $modele, $couleur, $annee, $nbKmParcourus){
		parent::__construct($nom, $modele, $couleur, $annee);

		$this->nbKmParcourus = $nbKmParcourus;
		self::$nbVoitures++;
	}
	public function getNbKmParcourus(){
		return $this->nbKmParcourus;
	}

	public function setNbKmParcourus($nbKmParcourus){
		$this->nbKmParcourus = $nbKmParcourus;
	}

	public static function getNbVoitures(){
		return self::$nbVoitures;
	}

	public static function setNbVoitures($nbVoitures){
		self::$nbVoitures = $nbVoitures;
	}

	public function avancer($nbKmParcourus){
		$this->nbKmParcourus += $nbKmParcourus;
	}

}