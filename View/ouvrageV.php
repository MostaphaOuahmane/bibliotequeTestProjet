<?php

$title = "liste ouvrage";
ob_start(); 

?>

<table  class="table">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Auteur</th>
            <th>Acction</th>
        </tr>
    </thead>
    <tbody>
    <?php 
foreach ($ouvrages as $ouvrage) {
?>
    <tr>
        <td scope="row"> <?= $ouvrage["titre"]?></td>
        <td><?= $ouvrage["prenom_auteur"]?> <?=$ouvrage["nom_auteur"]?></td>
        <td><a href="./?action=exemplaires&id_ouvrage=<?= $ouvrage['id_ouvrage']?>" class="btn btn-success">Consulter</a></td>
    </tr>
<?php } ?>
    </tbody>
</table>
<?php
$contant = ob_get_clean();
include("layout.php");
?>



 
