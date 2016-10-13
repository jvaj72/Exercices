<? php

abstract class canard{

protected $volerComportement
protected $exprimerComportement

}

public function nager(){
	echo "je nage !";
}

protected abstract afficherImage()

public function faireVoler(){
	$this->volerComportement->voler()
}

public function faireExprimer(){
	$this->exprimerComportement->Exprimer()
}

public function setVolerComportement($volerComportement){
	$this->volerComportement = volerComportement
}


?>