<?php
	include_once '../class/bdd.php';
    include '../components/head.php';
    include '../components/nav.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Créer Voiture</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
		<h1>Ajout Voitures</h1>

		<form method="post" action="access.php">
		    <fieldset class="uk-fieldset">
		        <legend class="uk-legend">Modèle</legend>
		        <div class="uk-margin">
		            <input class="uk-input" type="text" name="modele" placeholder="Modèle">
		            <input class="uk-input" type="text" name="puissance" placeholder="Puissance">
		            <input class="uk-input" type="text" name="poids" placeholder="Poids">
		            <input class="uk-input" type="text" name="image" placeholder="Image">
		            <input class="uk-input" type="text" name="vmax" placeholder="Vitesse max">
		            <input class="uk-input" type="text" name="accel" placeholder="Acceleration">
		            <input class="uk-input" type="text" name="conso" placeholder="Consommation">
		        </div>
		    </fieldset>
		    <fieldset class="uk-fieldset">
		        <legend class="uk-legend">Marque et Type</legend>
		        <div class="uk-margin">
		            <select name="marque" class="uk-select">
		                <option selected="">Marque</option>
		                <?php
		                	$requete = Connexion::getLink()->query('SELECT * FROM marque');
		                	while ($data = $requete->fetch()) {
		                		echo '<option value="'.$data['id'].'">'.$data['nom'].'</option>';
		                	}
						?>
		            </select>
		        </div>
		        <div class="uk-margin">
		            <select name="type" class="uk-select">
		                <option selected="">Type</option>
		                <?php
		                	$requete = Connexion::getLink()->query('SELECT * FROM type');
		                	while ($data = $requete->fetch()) {
		                		echo '<option value="'.$data['id'].'">'.$data['nom'].'</option>';
		                	}
						?>
		            </select>
		        </div>
		    </fieldset>
		    <p uk-margin>
		    	<button class="uk-button uk-button-default" type="submit" name="ajout">Enregister</button>
	    	    <a class="uk-button uk-button-default" type="button" href="/index.php">Retour</a>
			</p>
		</form>
<?php
    include '../components/script.php';
?>
    </body>
</html>


