<?php

class Marque {
	public static function affiche() {
		$requete = Connexion::getLink()->query('SELECT * FROM marque');
		while ($data = $requete->fetch()) {
			echo "<div id='".$data['id']."'>";
			echo "La voiture avec l'id n°".$data['id'];
			echo " est de la marque <b>".$data['nom']."</b>";
			echo "</div><br />";
		}
	}
}
?>