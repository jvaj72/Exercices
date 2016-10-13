<!DOCTYPE html>
<html>
	<head>
		<title>add</title>
	</head>
	<body>
		
			<form action="index.php" method="GET">
	
			
		
				<label>nom</label>
				<input type="text" name="param_nom" value=""/>
				<br/>

				<label>nombre d'habitant</label>
				<input type="text" name="param_nb_hab" value=""/>
				<br/>

				<label>Distance agence</label>
				<input type="text" name="param_dist-agence" value=""/>
				<br/>

				<label>code postal</label>
				<input type="text" name="param_cp" value=""/>
				<br/>
				
				<input type="submit" value="Enregistrer"/>
				<br/>
				<?php
				if(isset($error) && $error)
				{
					echo <label style="color red" "Erreur : l'enregistrement n'a pas été effectué">;
				}
				?>
				<label>Error!!!!! l'enregistrement ne s'est pas effectué</label>

				<input type="hidden" name="action" value="insert" />
				
				
				</form>
			
		
	</body>
</html>
