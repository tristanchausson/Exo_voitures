<?php
	require_once 'voiture.php';
    require'components/head.php';
    require'components/script.php';

	$resultat = Voiture::affiche();
?>
	
<table class="uk-table uk-table-hover uk-table-divider">
    <thead>
        <tr>
            <th>Marque</th>
            <th>Modèle</th>
            <th>Type</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

<?php
	foreach ($resultat as $data) {
		echo "<tr>";
		echo "<td>".$data['marqueNom']."</td>";
		echo "<td>".$data['modele']."</td>";
		echo "<td>".$data['nomType']."</td>";
		echo '<td><a href="/vue/fiche.php?afficher='.$data['idVoiture'].'" uk-icon="icon: info"></a>';
		echo '<a href="update.php?modifier='.$data['idVoiture'].'" uk-icon="icon: file-edit"></a>';
		echo '<a href="access.php?supprimer='.$data['idVoiture'].'" uk-icon="icon: trash"></a>';
		echo "</tr>";
	}
?>

    </tbody>
</table>
