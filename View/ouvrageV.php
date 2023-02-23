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



 
