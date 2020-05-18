<?php

    include (__DIR__ . '/db.php');
    
    function getCorps () {
        global $db;
        
        $results = [];
        $stmt = $db->prepare("SELECT id, corp, incorp_dt, email, zipcode, owner, phone FROM corps");
     
        
        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
             $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
                        
         }
         
         return ($results);
    }
    
    function addCorp ($corp_, $dt,$EM, $Zp, $owner_, $phone_ ) {
        global $db;
        
        $stmt = $db->prepare("INSERT INTO corps SET corp = :corp, incorp_dt = :incorp_dt, email = :email, zipcode = :zipcode, owner = :owner, phone = :phone");

        $binds = array(
            ":corp" => $corp_,
            ":incorp_dt" => $dt,
            ":email" => $EM,
            ":zipcode" => $Zp,
            ":owner" => $owner_,
            ":phone" => $phone_,
        );
            
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = 'Data Added';
        }
        
        return ($results);
    }
    
    function updateCorp ($id, $corp, $incorp_dt, $email, $zipcode, $owner, $phone) {
        global $db;
        
        $stmt = $db->prepare("UPDATE corps SET corp = :corp, incorp_dt = :incorp_dt, email = :email, zipcode = :zipcode, owner = :owner, phone = :phone  WHERE id=:id");
        $results = "";
        $binds = array(
            ":id" => $id,
            ":corp" => $corp,
            ":incorp_dt" => $incorp_dt,
            ":email" => $email,
            ":zipcode" => $zipcode,
            ":owner" => $owner,
            ":phone" => $phone,
        );
            
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = 'Data Updated';
        }
        
        return ($results);
    }
    function deleteCorps ($id) {
        global $db;
        
        $results = "Data was not deleted";
        $stmt = $db->prepare("DELETE FROM corps WHERE id=:id");
        
        $binds = array(
            ":id" => $id
        );
            
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = 'Data Deleted';
        }
        
        return ($results);
    }
    
    function getCorp ($id) {
         global $db;
        
        $result = [];
        $stmt = $db->prepare("SELECT id, corp, incorp_dt, email, zipcode, owner, phone FROM corps WHERE id=:id");
        $binds = array(
            ":id" => $id
        );
       
        if ( $stmt->execute($binds) && $stmt->rowCount() > 0 ) {
             $result = $stmt->fetch(PDO::FETCH_ASSOC);
                        
         }
         
         return ($result);
    }
    
    //sorting
    function corpSort($db,$sort,$dir){
        ?>
        <?php
        $sql = "SELECT * FROM corps ORDER BY $sort $dir";
        $sql = $db->prepare($sql);
        $sql->execute();
        $results = $sql->fetchAll(PDO::FETCH_ASSOC);
        return $results;
    }
	
	//search
    function corpSearch($db,$search,$term){
        ?>
        <?php
        if($search == "id")
        {
            $sql = "SELECT * FROM corps WHERE id = $term";
            $sql = $db->prepare($sql);
            $sql->bindValue(':id',$term,PDO::PARAM_INT);
            $sql->execute();
            $results = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }
        else {
            $sql = "SELECT * FROM corps WHERE $search LIKE '%{$term}%'";
            $sql = $db->prepare($sql);
            $sql->bindParam(':term', $term, PDO::PARAM_STR);
            $sql->execute();
            $results = $sql->fetchAll(PDO::FETCH_ASSOC);
            return $results;
        }
    }
    
 ?>
    
    
?>


