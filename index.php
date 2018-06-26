<h1>Exo Voitures</h1>
	<?php
		require 'components/head.php';
		require 'components/nav.php';
	?>

<p uk-margin>
    <a class="uk-button uk-button-default" type="button" href="create.php">
    	<button class="uk-button uk-button-default">Ajouter une nouvelle voiture</button>
    </a>
    
</p>
<?php
	require './vue/list.php';
	require 'components/script.php';
?>

    </body>
</html>