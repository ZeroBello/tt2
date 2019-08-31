<?php 
    include("database.php");
?>
<?php	
	if( isset($_POST['id']) ){
    
    $sql = "DELETE FROM Catalogue WHERE id = :id";
    $stmt= $pdo->prepare($sql);
    $stmt->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
    $stmt->execute();
    die("You've deleted the CCatalogue '$cid' <a href='managecatalogue.php'>click here</a> to continue.");
}
?>