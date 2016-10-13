
<?php

include("pdo.php");
include("commune.php");


	if(isset($_GET['oldName']) && isset($_GET['newName']))
	{
			$oldName = $_GET['oldName'];
			$newName = $_GET['newName'];
			


			$connexion = PDOfactory::getMysqlConnection();

			$query = "UPDATE communes SET nom = '.$newName.' WHERE nom = '.$oldName.'";
			/*$connexion->query($query);*/


			$statement=$connexion->prepare("SELECT * FROM communes WHERE id_com = :id_com AND nom =:nom AND nb_hab =:nb_hab AND dist_agence =:dist_agence AND cp =:cp);
			$statement->bindValue('nb_hab', '4000',PDO::PARAM_INT);
			$statement->bindValue('dist_agence','20',PDO::PARAM_INT);
			$statement->execute();


		while($ligne = $statement->fetch(PDO::FETCH_OBJ) )
		{
			echo 'Titre de la page :'.$ligne->id_com' '.$ligne->nom .' '.$ligne->nb_hab .' '.$ligne->dist_agence . ' '.$ligne->cp .'<br/>';
		}

			$statement->closeCursor();


			/*$NbLignes = $connexion->exec($q);
			echo $NbLignes . 'Lignes ont été affectés ';*/

	}

		else
		{
			echo 'parametres non définies !';
		}
?>