<?php 

class CommunesManager
{
	public function getAll(PDO $pdo){

	$stmt = $pdo->prepare("SELECT id_com, nom, nb_hab, dist_agence, cp FROM communes");
	$stmt->execute();

	$list = array();
	while($objLigne = $stmt->fetch(PDO::FETCH_OBJ)){

		$commune = new commune();
		$commune->setId($objLigne->id_com);
		$commune->setNom($objLigne->nom);
		$commune->setnbhab($objLigne->nb_hab);
		$commune->setDistAgence($objLigne->dist_agence);
		$commune->setCp($objLigne->cp);

		array_push($list, $commune);
	}

	return $list;
	}

	public function create($pdo ,$nom, $nb_hab, $dist_agence, $cp);
	{
		$Commune = new commune();
		$commune->setNom($nom);
		$commune->setnbhab($nb_hab);
		$commune->setDistAgence($dist_Agence);
		$commune->setCp($cp);

		$retour = $commune->enregistrer();

		$retour = false;
		return $retour;
	}
}

 ?>