<?php
	include_once 'bdd.php';
    include 'components/head.php';
    include 'components/script.php';

class Voiture {
	public static function ajout($modele, $puissance, $poids, $image, $vitesse, $accel, $conso, $marque, $type) {
		$add = Connexion::getLink()->prepare('INSERT INTO `voiture`(`modele`, `puissance`, `poids`, `image`, `vitesse_max`, `acceleration`, `consommation`, `marque`, `type`) VALUES (:modele, :puissance, :poids, :image, :vitesse_max, :acceleration, :consommation, :marque, :type)');
		$add->execute(array(':modele' => $modele, ':puissance' => $puissance, ':poids' => $poids, ':image' => $image, ':vitesse_max' => $vitesse, ':acceleration' => $accel, ':consommation' => $conso, ':marque' => $marque, ':type' => $type));
	}

	public static function affiche() {
		$requete = Connexion::getLink()->query('SELECT *, voiture.id AS idVoiture, type.nom AS nomType, marque.nom AS marqueNom FROM voiture, marque, type WHERE voiture.marque = marque.id AND voiture.type = type.id ORDER BY idVoiture');
		return $requete->fetchAll();
	}

	public static function afficheThree() {
		$requete = Connexion::getLink()->query('SELECT *, voiture.id AS idVoiture, type.nom AS nomType, marque.nom AS marqueNom FROM voiture, marque, type WHERE voiture.marque = marque.id AND voiture.type = type.id ORDER BY date DESC LIMIT 3');
		return $requete->fetchAll();
	}

	public static function afficheOne($voitureId) {
		$requete2 = Connexion::getLink()->query("SELECT *, voiture.id AS idVoiture, type.nom AS nomType, marque.nom AS marqueNom FROM voiture, marque, type WHERE voiture.marque = marque.id AND voiture.type = type.id AND voiture.id = $voitureId ORDER BY idVoiture");
		return $requete2->fetchAll();
	}

	public static function modifie($modele, $puissance, $poids, $image, $vitesse, $accel, $conso, $id) {
		$modif = Connexion::getLink()->prepare("UPDATE `voiture` SET `modele` = '$modele', `puissance` = $puissance, `poids` = $poids, `image` = '$image', `vitesse_max` = $vitesse, `acceleration` = $accel, `consommation` = $conso WHERE voiture.id = $id");
		$modif->execute();
		// print_r($modif);
		// var_dump($modif->errorInfo());
		// die;
	}

	public static function supprime($id) {
		$suppr = Connexion::getLink()->prepare('DELETE FROM `voiture` WHERE id=:id');
		$suppr->execute([':id' => $id]);
	}
}
?>