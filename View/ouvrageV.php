<?php
include_once("Includes/navBar.php");
?>
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
</table>