<?php
$exemplaires = array(
    array("id"=>1, "nom"=>'biblio 1',"date"=> null),
    array("id"=>2,"nom"=> 'biblio 2', "date"=>"2023-05-02"));

    ?>

    <table>
       <thead>
       <tr>
            
            <th>Bibliothèque</th>
            <th>Date de retour</th>
        </tr>
       </thead>
    
    <tbody>
    <?php
    foreach ($exemplaires as $ex){?>
      <tr>
        <td><?= $ex["nom"] ?></td>
        <?php 
            $exDate = ($ex["date"]===null) ?"disponible":$ex["date"] ;
            ?>
        <td><?= $exDate ?></td>
      </tr>
    <?php } 
    ?>
    </tbody>
 
    </table>

   
