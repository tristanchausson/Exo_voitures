<?php
	require_once '../class/voiture.php';
    require '../components/head.php';

	$resultat = Voiture::afficheThree();
?>

<h2>Derniers Ajouts</h2>

<?php
	require '../components/nav.php';
?>

<!-- <div class="uk-child-width-1-3@s uk-grid-match" uk-grid> -->
<div class="uk-child-width-1-3@m" uk-grid>

	<?php
		foreach ($resultat as $data) {
		    echo '<div>';
		    echo '<div class="uk-card uk-card-default">';
		    echo '<div class="uk-card-media-top">';
		    echo '<img src="'.$data['image'].'" alt="">';
		    echo '</div>';
		    echo '<div class="uk-card-body">';
		    echo '<h3 class="uk-card-title">'.$data['marqueNom']." ".$data['modele'].'</h3>';
			echo "<p>".$data['nomType']."</p>";
			echo '<p><a href="/vue/fiche.php?afficher='.$data['idVoiture'].'" uk-icon="icon: info" ratio="2"></a>';
			echo '<a href="/vue/update.php?modifier='.$data['idVoiture'].'" uk-icon="icon: file-edit" ratio="2"></a>';
			echo '<a href="/vue/access.php?supprimer='.$data['idVoiture'].'" uk-icon="icon: trash" ratio="2"></a>';
			echo '<p>';
		    echo '</div>';
		    echo '</div>';
		    echo '</div>';
			// echo '<div>';
    		// echo '<div class="uk-card uk-card-default uk-card-hover uk-card-body">';
			// echo '<h3 class="uk-card-title">'.$data['marqueNom']." ".$data['modele'].'</h3>
			// <img class="image" data-src="'.$data['image'].'" width="" height="" alt="" uk-img>';
			// echo '</div>';
			// echo '</div>';
		}
	?>

</div>

<!-- </div> -->

<?php
    include '../components/script.php';
?>