<?php
    include (__DIR__ . '/db.php');
    
    function addSchool ($Sname, $Scity, $Sstates) {
        global $db;
        $results = "";
        $stmt = $db->prepare("INSERT INTO schools SET school = :Sname, city = :Scity, states = :Sstates");
        $binds = array(
            ":Sname" => htmlspecialchars ($Sname),
            ":Scity" => htmlspecialchars ($Scity),
            ":SstateS" => htmlspecialchars ($Sstates)
            
        );
            
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = 'Data Added';
        }
        
        if ($results == "") {
            var_dump ($binds);
            exit;
        }
        return ($results);
    }
    
    function getAllSchools () {
        global $db;
        
        $results = [];
        $stmt = $db->prepare("SELECT id, school, city, state FROM schools");
 
        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
             $results = $stmt->fetchAll(PDO::FETCH_ASSOC);               
         }
         
         return ($results);
    }
    
   function deleteAllSchools () {
       global $db;
       
       $stmt = $db->query("DELETE FROM schools;");
       
       
       return 0;
   }
   
   function checkLogin ($user, $pass) {
       global $db;
       
       $results = [];
       $stmt = $db->prepare("SELECT * FROM user WHERE user_name = :user AND pass = (:pass)");
       
       $binds = array(
           ":userame" => $user,
           ":password" => sha1($pass)
       
        );
       
       if($stmt->execute($binds) && $stmt->rowCount() > 0){
          
          $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
          
       }
       else{
           
           return (false);
           
       }
       
       
       return ($results);
   }
   
   function getSchools ($Sname, $Scity, $Sstates) {
       global $db;
       
       $binds = array();
       $sql = "SELECT * FROM schools WHERE 0=0 ";
       if ($Sname != "") {
            $sql .= " AND schoolName LIKE :school";
            $binds['schoolName'] = '%'.$Sname.'%';
       }
       if ($Scity != "") {
           $sql .= " AND city LIKE :city";
           $binds['city'] = '%'.$Scity.'%';
       }
       if ($Sstates != "") {
           $sql .= " AND Sstates LIKE :Sstates";
           $binds['state'] = '%'.$Sstates.'%';
       }
       
        
       $stmt = $db->prepare($sql);
      
        $results = array();
        if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        return ($results);
   }
   
    function insertSchools($file_name){
       $file = fopen($file_name, 'rb');
       $school = fgetcsv($file);
       
       while(!feof($file)){
           
           $school = fgetcsv($file);
           $addSchool = addSchool($school[0], $school[1], $school[2]);
          
          
        }
       
   }