<?php


include("CommuneClasse.php");
include("PDOFactoryClasse.php");
	
	if(isset($_GET['param_nom'])
		&& isset($_GET['param_nb_hab'])
		&& isset($_GET['param_dist_agence'])
		&& isset($_GET['param_cp']))
	{
		$pdo =PDOfactory::getMysqlConnection();

		$commune1 = new commune();
		$commune1->setNom($_GET['param_nom']);
		$commune1->setNbHab($_GET['param_nb_hab']);
		$commune1->setDistAgence($_GET['param_dist_agence']);
		$commune1->setCp($_GET['param_cp']);
		$commune1->enregistrer($pdo);
	}

		
		
	