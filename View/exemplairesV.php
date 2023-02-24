<?php

$title = "liste des exemplaires";
ob_start(); 

?>
    <table  class="table">
       <thead>
       <tr>
            
            
            <th scope="col"> Titre d'ouvrage</th>
            <th scope="col"> 	Nom de bibliotheque</th>
            <th scope="col"> 	Disponible </th>
            
            
        </tr>
       </thead>
    
    <tbody>
    <?php
    foreach ($exemplaires as $ex){
      $dispo = $ex["id_emprunteur"] ===null ?"Disponible": " le ".$ex["date_retour"] ;
     
      ?>
   
      <tr>
        <td><?= $ex["titre"] ?></td>
        <td ><?= $ex["nom"] ?></td> 
        <td> <?= $dispo ?></td> 
       
       
      </tr>
    <?php } 
    ?>
    </tbody>
 
    </table>
    <?php
   
$contant = ob_get_clean();
include("layout.php");
?>

   
