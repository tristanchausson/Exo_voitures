<?php
    require_once '../voiture.php';
    require_once '../components/head.php';
?>

<h1>Spécifications Techniques</h1> 

<?php
    if (isset($_GET['afficher'])) {
        $afficher = $_GET['afficher'];
        $resultat = Voiture::afficheOne($afficher);
        foreach ($resultat as $data) {
            echo "<h3>Marque : ".$data['marqueNom']." / Modèle : ".$data['modele']."</h3>";
            echo '<div class="uk-child-width-1-5@m uk-grid-small uk-grid-match" uk-grid>';
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
            echo '<img src="'.$data['image'].'">';


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
    <a class="uk-button uk-button-default" type="button" href="../index.php">
        <button class="uk-button uk-button-default">Retour</button>
    </a>   
</p>

<?php
    require_once '../components/script.php';
?>