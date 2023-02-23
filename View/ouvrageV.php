<?php
include_once("Includes/navBar.php");

?>
<summary>Recherche</summary>
<details>
    <ol>
    <?php
    foreach ($motscles as $motcle) {
        echo "<li>$motcle</li>";
    }
    ?>
    </ol>
</details>
<table>
    <thead>
        <tr>
            <th>Titre</th>
            <th>Auteur</th>
        </tr>
    </thead>
<?php 
foreach ($ouvrages as $ouvrage) {
?>
    <tr>
        <td><?= $ouvrage["titre"]?></td>
        <td><?= $ouvrage["prenom_auteur"]?> <?=$ouvrage["nom_auteur"]?></td>
    </tr>
<?php
}
?>


<!-- <html>
<head>
	<title>Formulaire de recherche</title>
</head>
<body>
	<form action="traitement.php" method="get">
		<label for="motscles">Mots-clés :</label>
		<input type="text" id="motscles" name="motscles">
		<br><br>
		<input type="submit" value="Rechercher">
	</form>
</body>
</html>
 -->
