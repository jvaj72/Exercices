<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8"/>
		<title>Liste des communes</title>
	</head>
	<body>

		<table>
			<thead>
				<th>id</th>
				<th>Nom</th>
				<th>Nombre habitants</th>
				<th>Distance agence</th>
				<th>code postal</th>
			</thead>
			<tbody>
				<?php 
					foreach ($tabCommunes as $communes)
					{
						echo '<tr>';
						echo '<td>' . $communes->getId() . '</td>';
						echo '<td>' . $communes->getNom() . '</td>';
						echo '<td>' . $communes->getNbhab() . '</td>';
						echo '<td>' . $communes->getDistagence() . '</td>';
						echo '<td>' . $communes->getcp() . '</td>';
						echo '</tr>';
					}
				 ?>
			</tbody>
		</table>
		
		</body>
</html>

