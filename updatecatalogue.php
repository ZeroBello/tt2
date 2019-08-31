<?php 
    include("database.php");    
?>
<?php	
	if( isset($_POST['id'], $_POST['cname']))
	{
	    
	    $sql = "UPDATE Catalogue SET cname = :cname WHERE id = :id";
	    $stmt= $pdo->prepare($sql);
	    $stmt->bindValue(':id', $_POST['id'], PDO::PARAM_INT);
	    $stmt->bindValue(':cname', $_POST['cname'], PDO::PARAM_STR);
	    $pdoExec = $stmt->execute();
	    
	        // check 
	    if($pdoExec)
	    {
	        die("You've updated the Catalogue '$id' <a href='managecatalogue.php'>click here</a> to continue.");
	    }else{
	        echo 'Data Not updated';
	    }
	}    
?>