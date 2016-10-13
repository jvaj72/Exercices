<?php

	include("PDOFactoryClasse.php");
	include("CommuneClasse.php");

	if(isset($_GET['oldName']) && isset($_GET['newName'])){
		$oldName = $_GET['oldName'];
		$newName = $_GET['newName'];

		$connexion = PDOFactory::getMysqlConnection();

		$q = "UPDATE COMMUNES SET nom = '$newName' WHERE nom = '$oldName'";

		//$q = "INSERT INTO COMMUNES (nom, nb_hab, dist_agence, cp) ";
		//$q .= "VALUES ('Nantes',100000,600,44000)";

		//Requête Select sans protection d'injection SQL
		//$resultats=$connexion->query("SELECT * FROM COMMUNES"); // on va chercher toutes les communes
		//$resultats->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le résultat soit récupérable sous forme d'objet 

		//autre syntaxe  $ligne = $resultats->fetch(PDO::FETCH_OBJ)
		// while( $ligne = $resultats->fetch() ) // on récupère la liste des membres
		// {
		//         echo 'Titre de la page : '.$ligne->Nom .' '. $ligne->Nb_hab. ' '. $ligne->Dist_agence . ' '. $ligne->Cp .'<br />'; // on affiche le titre et le contenu
		// }
		// $resultats->closeCursor(); // on ferme le curseur des résultats;

		//Requête Select avec protection d'injection SQL
		// $statement = $connexion->prepare("SELECT * FROM COMMUNES WHERE nb_hab > :Nb_hab OR dist_agence < :Dist_agence");
		// $statement->bindValue(':Nb_hab', 10000, PDO::PARAM_INT);
		// $statement->bindValue(':Dist_agence', 500, PDO::PARAM_INT);
		// $statement->execute();

		// //autre syntaxe  $ligne = $resultats->fetch(PDO::FETCH_OBJ)
		// while( $ligne = $statement->fetch(PDO::FETCH_OBJ) ) // on récupère la liste des membres
		// {
		//         echo 'Titre de la page : '.$ligne->nom .' '. $ligne->nb_hab. ' '. $ligne->dist_agence . ' '. $ligne->cp .'<br />'; // on affiche le titre et le contenu
		// }
		// $statement->closeCursor(); // on ferme le curseur des résultats;

		//$nbLignes = $connexion->exec($q);
		//echo $nbLignes . ' lignes ont ete affectes';

		$commune1 = new Commune();
		$commune1->charger($connexion, "Toulouse");
		echo $commune1->getNom(). " avec ". $commune1->getNbHab() . " -----> ";

		$commune1->setNom("Rouen");

		var_dump($commune1->enregistrer($connexion));

	} else {
		echo "parametres non définies !";
	}
?>