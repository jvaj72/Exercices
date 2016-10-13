<?php

class Commune {

	private $id;
	private $nom;
	private $nbHab;
	private $distAgence;
	private $cp;
	private static $conn;

	public function charger($pdo, $nom){

		try{

			$stmt = $pdo->prepare("SELECT DISTINCT id_com, nom, nb_hab, dist_agence, cp FROM COMMUNES WHERE nom = :nom LIMIT 1");
			$stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
			$stmt->execute();

			$objResultat = $stmt->fetch(PDO::FETCH_OBJ);

		}
		catch(PDOException $e){
			echo "Erreur lors de l'exécution du chargement de la commune : " . $e->getMessage();
		}

		$this->id = $objResultat->id_com;
		$this->nom = $objResultat->nom;
		$this->nbHab = $objResultat->nb_hab;
		$this->distAgence = $objResultat->dist_agence;
		$this->cp = $objResultat->cp;

		//En retournant le résultat dans un tableau associatif :
		//$tabResultat = $stmt->fetch(PDO::FETCH_ASSOC);
		//var_dump($tabResultat['nom']);

	}

	public function enregistrer($pdo){

		//Je teste si mon objet à un attribut id de renseigné
		try{
		var_dump($pdo);

			/*if($this->id){*/
				//Si oui, je vérifie si un enregistrement avec cet id existe dans la bdd
				if($this->isExist($pdo, $this->id))
				{

					$stmt = $pdo->prepare("UPDATE COMMUNES SET nom = :Nom, nb_hab = :NbHab, dist_agence = :Dist_agence, cp = :Cp WHERE id_com = :Id");
					$stmt->bindParam('Id', $this->id, PDO::PARAM_INT);

				} 
				else 
				{

					$stmt = $pdo->prepare("INSERT INTO COMMUNES (nom, nb_hab, dist_agence, cp) VALUES (:Nom, :NbHab, :Dist_agence, :Cp)");
				}

				$stmt->bindParam('Nom', $this->nom, PDO::PARAM_STR);
				$stmt->bindParam('NbHab', $this->nbHab, PDO::PARAM_INT);
				$stmt->bindParam('Dist_agence', $this->distAgence, PDO::PARAM_INT);
				$stmt->bindParam('Cp', $this->cp, PDO::PARAM_INT);
				echo 'pas derreur non ^poefeof';

				return $stmt->execute();
			}
		//}
		catch(PDOException $e){
			echo "Erreur lors de l'enregistrement : " . $e->getMessage();
		}

	}

	public function isExist($pdo, $id){

		try{

			$stmt = $pdo->prepare("SELECT id_com FROM COMMUNES WHERE id_com = :id");
			$stmt->bindParam('id', $id);
			$stmt->execute();

			$tabResult = $stmt->fetch(PDO::FETCH_ASSOC);
			if(empty($tabResult)){
				$retour = false;
			} else {
				$retour = true;
			}

			return $retour;

		}
		catch(PDOException $e){
			echo "Erreur lors de l'exécution de la requête isExist : " . $e->getMessage();
		}
	}

	public function getNom(){
		return $this->nom;
	}

	public function setNom($nom){
		$this->nom = $nom;
	}

	public function getNbHab(){
		return $this->nbHab;
	}

	public function setNbHab($nbHab){
		$this->nbHab = $nbHab;
	}

	public function getDistAgence(){
		return $this->distAgence;
	}

	public function setDistAgence($distAgence){
		$this->distAgence = $distAgence;
	}

	public function getCp(){
		return $this->cp;
	}

	public function setCp($cp){
		$this->cp = $cp;
	}

}