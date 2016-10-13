<?php

include("fileNotFoundException.php")


class Calcul
{

	public function diviser($nb1, $nb2)
	{
		$retour = 0;
		try
		{
			if($nb2 == 0)
			{
				throw new Exception ('Divison par 0 ');
			}
			$retour = $nb1 / $nb2;
			echo $nb1 .'/'. $nb2.' = '.$retour;
		}

		catch(Exception $e)
		{
			echo 'L\'erreur suivante a été générée : ';
			echo $e->getMessage();
		}
		return($retour);
	}

	private function lancerException($message){

		try{
			throw new Exception($message);
			
		}

		catch(fileNotFoundException $e){

			}

		echo "j'ai été execute après le bloc try-catch de la méthode lancerException";
	}


}

?>