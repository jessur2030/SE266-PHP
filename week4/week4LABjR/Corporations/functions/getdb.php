<?php
include_once "getdb.php";
function getAllCorpData(){

    $db = dbconnect();
    
    
    $stmt = $db->prepare("SELECT * FROM corps");
    $results = array();
   
    if ($stmt->execute() && $stmt->rowCount() > 0) {

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
     
    return $results;
}
function getCorpSort($column, $order)
{
  
    $db = dbconnect();
    
    
    $stmt = $db->prepare("SELECT * FROM corps ORDER BY $column $order");
    
     $results = array();

    if ($stmt->execute() && $stmt->rowCount() > 0) {
   
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    return $results;
}
function getCorpSearch ($colum, $keyword)
{

    $db = dbconnect();
    
     
    $stmt = $db->prepare("SELECT * FROM corps WHERE ($colum LIKE '%$keyword%')");
    
    $results = array();

    if ($stmt->execute() && $stmt->rowCount() > 0) {

        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
    return $results;
}
function rowCount1($value1, $value2)
{

    $db = dbconnect();
    
 
    $stmt = $db->prepare("SELECT * FROM corps ORDER BY $value1 $value2");
    
    
     $results = array();

    if ($stmt->execute() && $stmt->rowCount() > 0) {
        
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $rowCount = $stmt->rowCount();
        }
        
    return $rowCount;
}
function rowCount2($value1, $value2)
{

    $db = dbconnect();
    

    $stmt = $db->prepare("SELECT * FROM corps WHERE ($value1 LIKE '%$value2%')");    
     $results = array();

    if ($stmt->execute() && $stmt->rowCount() > 0) {
     
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $rowCount = $stmt->rowCount();
        }
      if ($rowCount > 0) { 
    return $rowCount;
      }
      else
      {
          $rowCount = 0;
          
          return $rowCount;
      }
}