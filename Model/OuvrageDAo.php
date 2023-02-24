<?php 
class OuvrageDAO{
    public static function findByMotsCles($keywords) {      
        include_once("Model/Pdo_Biblio.php") ;
        // Colonnes à comparer
        $places = ['o.titre', 'a.prenom', 'a.nom'];
        // tous les something LIKE some keyword 
        $likes = array();
        $keywordIndex = 0;
        foreach ($keywords as $keyword) {
            $placeIndex = 0;
            foreach ($places as $place) {
                array_push($likes,"($place LIKE :keyword$keywordIndex" . "_$placeIndex)");
                $placeIndex++;
            }
            $keywordIndex++;
        }
        $where = join('+', $likes);
        $sql = "SELECT 
            o.*, $where AS nb_occurrences, a.id_auteur, a.prenom AS prenom_auteur, a.nom AS nom_auteur
        FROM
            ouvrage o
                INNER JOIN
            auteur a ON o.id_auteur = a.id_auteur
        HAVING nb_occurrences > 0
        ORDER BY nb_occurrences DESC";
        
        // se connecter à bd
        $db = Pdo_Biblio::database();
        $stmt= $db->prepare($sql);
        // Lier les paramètres sur le PDOStatement $stmt
        for ($kw = 0 ; $kw < count($keywords) ; $kw++) {
            for ($pl = 0 ; $pl < count($places) ; $pl++) {
                $stmt->bindValue(":keyword$kw"."_$pl", "%$keywords[$kw]%");
            }
        }  
        $stmt->execute();
        return  $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}