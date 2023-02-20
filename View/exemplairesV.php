<?php

$title = "listee des exemplaires";
ob_start(); ?>

 

    <table  class="table">
       <thead>
       <tr>
            
            <th scope="col">id_exemplaire </th>
            <th scope="col">id_ouvrage</th>
            <th scope="col"> 	id_emprunteur</th>
            <th scope="col"> 	id_bibliotheque</th>
        </tr>
       </thead>
    
    <tbody>
    <?php
    foreach ($exemplaires as $ex){?>
      <tr>
        <td scope="row"><?= $ex["id_exemplaire"] ?></td>
        <td><?= $ex["id_ouvrage"] ?></td>
        <td><?= $ex["id_emprunteur"] ?></td>
        <td><?= $ex["id_bibliotheque"] ?></td>
      </tr>
    <?php } 
    ?>
    </tbody>
 
    </table>
    <?php
$contant = ob_get_clean();
include("layout.php");
?>

   
