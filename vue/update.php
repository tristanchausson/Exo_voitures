<?php
	include_once '../class/voiture.php';
	include '../components/head.php';
	include '../components/nav.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Modifier Voiture</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body>
		<h1 style="color: #c15555;">Modification</h1>
<!-- 		<form method="post" action="access.php">
		    <fieldset class="uk-fieldset">
		        <legend class="uk-legend">Modèle</legend>
		        <div class="uk-margin"> -->

		    <form class="uk-grid-small" uk-grid method="post" action="access.php">
					<?php
					    if (isset($_GET['modifier'])) {
					        $modifier = $_GET['modifier'];
		                    $resultat = Voiture::afficheOne($modifier);
		                    foreach ($resultat as $data) {
							    echo '<div class="uk-width-1-1">
							        <input class="uk-input" type="text" name="modele" value="Modèle : '.$data['modele'].'">
							    </div>
							    <div class="uk-width-1-1@s">
							        <input class="uk-input" type="text" name="image" value="Image : '.$data['image'].'">
							    </div>
							    <div class="uk-width-1-2@s">
							        <input class="uk-input" type="text" name="puissance" value="Puissance : '.$data['puissance'].'">
							    </div>
							    <div class="uk-width-1-2@s">
							        <input class="uk-input" type="text" name="poids" value="Poids : '.$data['poids'].'">
							    </div>
							    <div class="uk-width-1-2@s">
							        <input class="uk-input" type="text" name="vmax" value="Vitesse max : '.$data['vitesse_max'].'">
							    </div>
							    <div class="uk-width-1-4@s">
							        <input class="uk-input" type="text" name="accel" value="Accélération : '.$data['acceleration'].'">
							    </div>
							    <div class="uk-width-1-4@s">
							        <input class="uk-input" type="text" name="conso" value="Consommation : '.$data['consommation'].'">
							    </div>';
							  	echo '<p uk-margin style="display: flex;margin: auto;margin-top: 2%;">';
							    echo '<button class="uk-button uk-button-default" type="submit" name="modif" value="'.$modifier.'" uk-icon="check" ratio="3" style="color: #c15555;border: none;"></button>';
							    echo '<a class="uk-button uk-button-default" type="button" href="/index.php" uk-icon="home" ratio="3" style="color: #c15555;border: none;"></a>';  
								echo '</p>';
					            // echo '<input class="uk-input" type="text" name="modele" value="'.$data['modele'].'">';
					            // echo '<legend class="uk-legend">Puissance</legend>';
					            // echo '<input class="uk-input" type="text" name="puissance" value="'.$data['puissance'].'">';
					            // echo '<legend class="uk-legend">Poids</legend>';
					            // echo '<input class="uk-input" type="text" name="poids" value="'.$data['poids'].'">';
					            // echo '<legend class="uk-legend">Vitesse Max</legend>';
					            // echo '<input class="uk-input" type="text" name="vmax" value="'.$data['vitesse_max'].'">';
					            // echo '<legend class="uk-legend">Accélération</legend>';
					            // echo '<input class="uk-input" type="text" name="accel" value="'.$data['acceleration'].'">';
					            // echo '<legend class="uk-legend">Consommation</legend>';
					            // echo '<input class="uk-input" type="text" name="conso" value="'.$data['consommation'].'">';
					            // echo '<legend class="uk-legend">Image</legend>';
					            // echo '<input class="uk-input" type="text" name="image" value="'.$data['image'].'">';
		        				// echo '</div>';
							    // echo '</fieldset>';
		    		// 			echo '<p uk-margin>';
							 //    echo '<button class="uk-button uk-button-default" type="submit" name="modif" value="'.$modifier.'" uk-icon="check" ratio="3"></button>';
							 //    echo '<a class="uk-button uk-button-default" type="button" href="/index.php" uk-icon="home" ratio="3"></a>';  
								// echo '</p>';
								// echo '</form>';
		                    }
					    }
    include '../components/script.php';
					?>
		</form>

    </body>
</html>



<!-- 		    <fieldset class="uk-fieldset">
		        <legend class="uk-legend">Marque et Type</legend>
		        <div class="uk-margin">
		            <select name="marque" class="uk-select">
		                <option selected="">Marque</option>
		                <?php
		                	// $requete = Connexion::getLink()->query('SELECT * FROM marque');
		                	// while ($data = $requete->fetch()) {
		                	// 	echo '<option value="'.$data['id'].'">'.$data['nom'].'</option>';
		                	// }
						?>
		            </select>
		        </div>
		        <div class="uk-margin">
		            <select name="type" class="uk-select">
		                <option selected="">Type</option>
		                <?php
		                	// $requete = Connexion::getLink()->query('SELECT * FROM type');
		                	// while ($data = $requete->fetch()) {
		                	// 	echo '<option value="'.$data['id'].'">'.$data['nom'].'</option>';
		                	// }
						?>
		            </select>
		        </div>
		    </fieldset> -->
