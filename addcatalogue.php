<?php
require_once './database.php';

       if( isset($_POST['cname']) ){ 
        $sql = "INSERT INTO Catalogue(cname)
                values(:cname)";
        $stmt= $pdo->prepare($sql);
        $stmt->bindValue(':cname', $_POST['cname'], PDO::PARAM_STR);      
        $pdoExec = $stmt->execute();

        if($pdoExec)
        {
            echo 'Added successfully';
        }else{
            echo 'Added NOT successfully';
        }
    }
?>
<br>
<li><a href="index.php">Home Page</a></li>
<form action = "addcatalogue.php" method = "post">
    <fieldset class = "fitContent">
        <legend>Add Catalogue</legend>
        
        <br>Name<br>
        <input type="text" name="cname"   required />
        <br><br>
        <input type="submit" value="Add" /><br>
        
    </fieldset>
    
</form>
</body>
</html>

