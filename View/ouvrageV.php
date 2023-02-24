<?php

$title = "liste ouvrage";
ob_start(); 

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
        <td> <a href="./?action=exemplaires&id_ouvrage=<?= $ouvrage['id_ouvrage']?>"><?= $ouvrage["titre"]?></a></td>
        <td><?= $ouvrage["prenom_auteur"]?> <?=$ouvrage["nom_auteur"]?></td>
    </tr>
<?php
}

$contant = ob_get_clean();
include("layout.php");
?>



 
