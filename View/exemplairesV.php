<?php

$title = "liste des exemplaires";
ob_start(); 
// if($_SERVER['REQUEST_METHOD'] == 'POST'){
//     var_dump($_POST);
// }
?>

 

<!-- <form method="post" action="<?php $_SERVER['PHP_SELF'] ?>" >
  <input type="text" placeholder="Entre votre mot" class="mx-3" name="mot">
  <input type="submit" value="chercher" class="btn btn-success" name="chercher">
</form> -->
    <table  class="table">
       <thead>
       <tr>
            
            
            <th scope="col"> Titre d'ouvrage</th>
            <th scope="col"> 	Nom de bibliotheque</th>
            
            
        </tr>
       </thead>
    
    <tbody>
    <?php
    foreach ($exemplaires as $ex){?>
      <tr>
        <td><?= $ex["titre"] ?></td>
        <td><?= $ex["nom"] ?></td>
       
      </tr>
    <?php } 
    ?>
    </tbody>
 
    </table>
    <?php
   
$contant = ob_get_clean();
include("layout.php");
?>

   
