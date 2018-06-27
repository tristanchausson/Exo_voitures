<?php
    include_once '../class/voiture.php';
    include_once '../components/head.php';
?>

<h2>Spécifications Techniques</h2> 

<?php
    if (isset($_GET['afficher'])) {
        $afficher = $_GET['afficher'];
        $resultat = Voiture::afficheOne($afficher);
        foreach ($resultat as $data) {
            echo "<h3>Marque : ".$data['marqueNom']." / Modèle : ".$data['modele']."</h3>";
            echo '<img class="image" data-src="'.$data['image'].'" width="" height="" alt="" uk-img>';
            echo '<div class="uk-child-width-1-6@m uk-grid-small uk-grid-match" uk-grid>';
            echo '<div>';
            echo '<div class="uk-card uk-card-secondary uk-card-body">';
            echo '<h3 class="uk-card-title">Puissance</h3>';
            echo '<p>'.$data['puissance'].' CV</p>';
            echo '</div>';
            echo '</div>';
            echo '<div>';
            echo '<div class="uk-card uk-card-secondary uk-card-body">';
            echo '<h3 class="uk-card-title">Poids</h3>';
            echo '<p>'.$data['poids'].' kg</p>';
            echo '</div>';
            echo '</div>';
            echo '<div>';
            echo '<div class="uk-card uk-card-secondary uk-card-body">';
            echo '<h3 class="uk-card-title">Rapport Puissance / Poids</h3>';
            echo '<p>'.round (($data['puissance']*0.736)/$data['poids'], 3, PHP_ROUND_HALF_UP).' kw.kg</p>';
            echo '</div>';
            echo '</div>';
            echo '<div>';
            echo '<div class="uk-card uk-card-secondary uk-card-body">';
            echo '<h3 class="uk-card-title">Vitesse Max</h3>';
            echo '<p>'.$data['vitesse_max'].' km/h</p>';
            echo '</div>';
            echo '</div>';
            echo '<div>';
            echo '<div class="uk-card uk-card-secondary uk-card-body">';
            echo '<h3 class="uk-card-title">Accélération</h3>';
            echo '<p>0 à 100 km/h en '.$data['acceleration'].' sec</p>';
            echo '</div>';
            echo '</div>';
            echo '<div>';
            echo '<div class="uk-card uk-card-secondary uk-card-body">';
            echo '<h3 class="uk-card-title">Consommation</h3>';
            echo '<p>'.$data['consommation'].' L/100km</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';

            // echo '<li>Puissance : <b>'.$data['puissance'].' cv</b></li>';
            // echo '<li>Poids : <b>'.$data['poids'].' kg</b></li>';
            // echo '<li>Image</li>';
            // echo '<li>Vitesse Max : <b>'.$data['vitesse_max'].' km/h</b></li>';
            // echo '<li>Accélération 0 à 100km/h : <b>'.$data['acceleration'].' sec</b></li>';
            // echo '<li>Consommation L/100km : <b>'.$data['consommation'].'</b></li>';
        }
    }
?>

<p uk-margin>
    <a class="uk-button uk-button-default" type="button" href="/index.php">Retour</a>
</p>

<?php
    include_once '../components/script.php';
?>