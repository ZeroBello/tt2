<?php
    require_once './database.php';
    $sql = "SELECT cid, cname, cdescription from Catalogue";
        $stmt = $pdo->prepare($sql);
        
        $stmt->execute();
    
?>