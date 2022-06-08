<?php 
 
class panelModel{

    function query($query_string,$args){
        $conn = require "Db/connDb.php";
        if ($conn != null) {
            $sth = $conn->prepare($query_string);
            $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $result;
            exit();
        } else {
            return null;
            exit();
        }
    }
    function getUsers(){
        $result = $this->query("Select * from users",null);
        return $result;
        
    }
    function getAllItems(){
        $result = $this->query("Select * from works",null);
        
        return $result;
    }
}
?>