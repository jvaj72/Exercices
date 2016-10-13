<?php

interface IvolerComportement {
	public function voler();
}

class VolerAvecAiles implements IvolerComportement{
	public function voler(){
		echo "Super!, je vole avec mes ailes.";
	}
}

class AucunVol implements IvolerComportement{
	public function voler(){
		echo "Je ne peux pas voler!";
	}
}

class VolerAvecRoquette implements IvolerComportement{
	public function voler(){
		echo "Vitesse supersonique avec ma roquette!";
	}
}

?>