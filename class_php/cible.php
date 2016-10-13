
<body>

	
<?php 

	include("formulaire.php");


	if(isset($_POST['nb1']) && is_numeric($_POST['nb1'])){
		$nombre1 = (float)$_POST['nb1'];
	}

	if(isset($_POST['nb2']) && is_numeric($_POST['nb2'])){
		$nombre2 = (float)$_POST['nb2'];
	}

	$objetcalcul = new Calcul();
	$resultat = $objetcalcul->diviser($nombre1, $nombre2);

	echo "le resultat de la division est : " . $resultat;

?>
	<form action="home.php"><input type="submit" value="retour"/>
			
</body>
</html>