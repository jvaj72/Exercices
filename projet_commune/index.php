<?php 
	include('librairies/pdo.php');
	include('modeles/CommuneClasse.php');
	include('modeles/CommunesManagerClass.php');

	$pdo = PDOfactory::getMysqlConnection();

	if(isset($_GET['action']))
	{
		$action=$_GET['action'];

	}
	else
	{
		$action = null;
	}

		switch($action)
		{
			case 'add': 
				$vueAAfficher = 'views/add.php';
				break;

			case 'insert':

				$error = $CommunesManager = new CommunesManager();

				$nom =$_GET['param_nom'];
				$nbhab =$_GET['param_nb_hab'];
				$distAgence=$_GET['param_dist_agence'];
				$cp =$_GET['param_cp'];


				$error = $CommunesManager->create($nom, $nbhab, $distAgence, $cp);

				if($error)
				{
					$vueAAfficher = 'views/add.php';
				}
				else
				{
					$vueAAfficher = 'views/liste.^php';
				}
				break;

			default:

				$CommunesManager = new CommunesManager();
				$tabCommunes = $CommunesManager->getAll($pdo);

				$vueAAfficher = 'views/liste.php';
			
			
		}
	

	/*$tabCommunes[] = $commune1; /* 2ème façon de déclarer des valeurs dans un tableau !
	$tabCommunes[] = $commune2;*/

	/*array_push($tabCommunes, $commune1, $commune2); 1ere façon */

	include('layouts/layout.php');/* toujours inclure notre layout a la fin de cette page pur qu'il prennent en compte les varables déclarés.*/


	 ?>