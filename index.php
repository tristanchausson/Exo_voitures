<!DOCTYPE html>
<html>
    <head>
        <title>Voiture_exo</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
<?php
	require'components/head.php';
?>


    </head>
    <body>
		<h1>Exo Voitures</h1>
		<p uk-margin>
		    <a class="uk-button uk-button-default" type="button" href="create.php">
		    	<button class="uk-button uk-button-default">Ajouter une nouvelle voiture</button>
		    </a>
		    
		</p>
		<?php
			require'./vue/list.php';
		?>

<?php
	require'components/script.php';
?>
    </body>
</html>