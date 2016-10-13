<?php

interface IExprimerComportement{
	public function Exprimer();
}

class Couaquer implements IExprimerComportement{
	public function Exprimer(){
		echo "Je fais coin-coin!";
	}
}

class Couiner implements IExprimerComportement{
	public function Exprimer(){
		echo "je couine tout le temps et c'est pénible ahahah!";
	}
}

class AucunCouaque implements IExprimerComportement{
	public function Exprimer(){
		echo "hummm hummm, je ne peux pas m'exprimer!";
	}
}

?>