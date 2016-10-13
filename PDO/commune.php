<?php

class commune
{

	private $id;
	private $nom;
	private $nb_hab;
	private $dist_agence;
	private $cp;
	private static $connexion;

	public function charger($pdo, $nom)
	{
		$smtm = $pdo->prepare("SELECT DISTINCT nom,nb_hab,dist_agence,cp,FROM commmunes WHERE nom= :nom LIMIT 1");
		$smtm->bindParam('nom', $nom, PDO::PARAM_STR);
		$smtm->execute();

		$objResultat = $stmt->fetch(PDO::FETCH_OBJ);
		$this->id = $objResultat->id_com;
		$this->nom = $objResultat->nom;
		$this->nb_hab = $objResultat->nb_hab;
		$this->dist_agence = $objResultat->dist_agence;
		$this->cp = $objResultat->cp;

		$stmt->fetch(PDO::FETCH_CLASS,);
	} 
		public function enregistrer($pdo)
		{
			
			if($this->isExist($pdo, $this->id))
			{
				$stmt = $pdo->prepare("UPDATE communes SET nom = :nom, nb_hab = :nb_hab, dist_agence = :dist_agence, cp = :cp WHERE id_com = :id_com");
				$stmt->bindParam('id',$id,pdo::PARAM_INT)
			}
			else
			{
				if($this->nom)
				{
					$stmt =$pdo->prepare("INSERT INTO communes (nom, nb_hab, dist_agence, cp) VALUES (:nom, :nb_hab; :dist_agence, :cp)");
				}
				
				$stmt->bindParam(':Nom', $this->nom,pdo::PARAM_STR);
				$stmt->bindParam(':nb_hab', $this->nb_hab,pdo::PARAM_INT);
				$stmt->bindParam(':dist_agence', $this->dist_agence,pdo::PARAM_INT);
				$stmt->bindParam(':cp', $this->cp,pdo::PARAM_INT);
				}
			}
			
		}
		public function isExist($pdo, $id)
		{
			$stmt=pdo =prepare("SELECT id_nom FROM communes WHERE id_com =:id");
			$stmt->bindParam ('id', $id);
			$stmt->execute();

			$tabResultat = $stmt->fetch(pdo::PARAM_ASSOC);
			if(empty($tabResultat))
			{
				$retour = false;
			}
			else
			{
				$retour = true;
			}

				return $retour


		}
		public function getNom()
		{
			return $this->nom;
		}

		public function setNom($nom)
		{
			$this->nom = $nom;
		}

		public function getNb_hab()
		{
			return $this->Nb_hab;
		}
		public function setNb_hab($nh)
		{
			$this->nb_hab = $nh;
		}

		public function getDist_agence()
		{
			return $this->dist_agence;
		}
		public function setDist_agence($da)
		{
			$this->dist_agence = $da;
		}

		public function getCp()
		{
			return $this->cp;
		}
		public function setCp($cp)
		{
			$this->cp = $cp;
		}
		}

?> 