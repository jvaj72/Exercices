<?php

include("interfaces/exprimerComportementInterface");
include("interfaces/volerComportementInterface");
include("Canards/canardclass.php");
include("Canards/canardColVertclas.php");
include("Canards/canardLeurreclass.php");
include("Canards/canardPlastiqueclass.php");
include("Canards/canardTeteRougeclass.php");

?>

<?php

$canardColVert1 = new canardColVert1();
$canardColVert1 -> faireVoler();
$canardColVert1 -> faireExprimer();
$canardColVert1 -> setvolerComportement(new VolerAvecRoquette);



?>