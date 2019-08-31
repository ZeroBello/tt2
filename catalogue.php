<?php
    require_once './database.php';
    $sql = "SELECT id, cname from Catalogue";
        $stmt = $pdo->prepare($sql);
        
        $stmt->execute();
    
?>