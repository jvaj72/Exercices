<?php  
	include_once("ControleurClasse.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="application de calcul">
    <meta name="author" content="yoanngauchard">

    <title>Agence Location</title>
  </head>
  <body>
    <form action='ControleurClasse.php' method='GET'>
      <label>Id</label>
      <input type="text" name="param_id" value=""/>
      <br/>
      <label>Nom</label>
      <input type="text" name="param_nom" value=""/>
      <br/>
      <label>Nombre d'habitant</label>
      <input type="text" name="param_nb_hab" value=""/>
      <br/>
      <label>Distance Agence</label>
      <input type="text" name="param_dist_agence" value=""/>
      <br/>
      <label>Code Postal</label>
      <input type="text" name="param_cp" value=""/>
      <br/>
      <input type="submit" value="Enregistrer"/>
    </form>

    <label><?php if(isset($commune1))echo $commune1->getNom();?></label>
    <label><?php if(isset($commune1))echo $commune1->getNbHab();?></label>
    <label><?php if(isset($commune1))echo $commune1->getDistAgence();?></label>
    <label><?php if(isset($commune1))echo $commune1->getCp();?></label>
    	
  </body>

</html>