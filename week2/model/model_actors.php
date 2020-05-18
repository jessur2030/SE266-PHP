<?php

    include (__DIR__ . '/db.php');
    
    function getActors () {
        global $db;
        
        $results = [];
        $stmt = $db->prepare("SELECT id, firstname, lastname, dob, height FROM actors");      
        
        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
             $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        
         }
         
         return ($results);
    }
    
   
    
    function addActors ($fn, $ln, $Bdate, $ht) {
        global $db;
        
        $stmt = $db->prepare("INSERT INTO actors SET firstname = :firstname, lastname = :lastname, dob = :dob, height = :height ");

        $binds = array(
            ":firstname" => $fn,
            ":lastname" => $ln,
            ":dob" => $Bdate,
            ":height" => $ht
        );
            
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = 'Data Added';
        }
        
        return ($results);
    }
   
   /* $a = addActors ('Don', 'Johnson', 'x', '78');
    $actors = getActors();
    var_dump ($actors); */
    
?>
