 
<?php
    require_once './database.php';
    $sql = "SELECT id, cname from Catalogue";
        $stmt = $pdo->prepare($sql);
        //Thiết lập kiểu dữ liệu trả về
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $stmt->execute();
        $resultSet = $stmt->fetchAll();
    
?>
