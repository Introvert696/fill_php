<?php
class itemsModel
{
    function getAllItems()
    {
        $dbcon = require_once 'Db/connDb.php';
        if ($dbcon != null) {
            $sth = $conn->prepare("Select * from works");
            $sth->execute();
            $result = $sth->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        } else {
            exit();
        }
    }
    function getOneItem($id)
    {
        $dbcon = require_once 'Db/connDb.php';
        if ($dbcon != null) {
            $sth = $conn->prepare("Select * from works where id=".$id);
            $sth->execute();
            $result = $sth->fetch(PDO::FETCH_ASSOC);
            return $result;
        } else {
            exit();
        }
    }
}
