<?php
	require_once 'voiture.php';
    require'components/head.php';
    require'components/script.php';

	if (isset($_POST['ajout'])) {
		$modele    = $_POST['modele'];
		$puissance = $_POST['puissance'];
		$poids     = $_POST['poids'];
		$image     = $_POST['image'];
		$vitesse   = $_POST['vmax'];
		$accel     = $_POST['accel'];
		$conso     = $_POST['conso'];
		$marque    = $_POST['marque'];
		$type      = $_POST['type'];

		Voiture::ajout($modele, $puissance, $poids, $image, $vitesse, $accel, $conso, $marque, $type);
		echo "Voiture ajoutée !";
		header('Refresh: 2; url=../index.php');
	}

	if (isset($_POST['modif'])) {
		$modifi = $_POST['modif'];
		$modele    = $_POST['modele'];
		$puissance = intval($_POST['puissance']);
		$poids     = intval($_POST['poids']);
		$image     = $_POST['image'];
		$vitesse   = intval($_POST['vmax']);
		$accel     = floatval($_POST['accel']);
		$conso     = floatval($_POST['conso']);
		// var_dump($modifi);
		Voiture::modifie($modele, $puissance, $poids, $image, $vitesse, $accel, $conso, $modifi);
		echo "Modification effectuée !";
		header('Refresh: 2; url=../index.php');
	}

	if (isset($_GET['supprimer'])) {
		$supprimer = $_GET['supprimer'];
		Voiture::supprime($supprimer);
		header('Refresh: 2; url=../index.php');
	}
?>