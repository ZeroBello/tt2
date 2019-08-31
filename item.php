<?php
        require_once './database.php';
        //load items
        $id=$_GET['id'];
        $sql = "SELECT iid, iname, idescription, iprice, istatus, isize, iimage FROM Item where catalogueid='$id'";
        $stmt = $pdo->prepare($sql);
        
        $stmt->execute();
         
         
               
    
?>