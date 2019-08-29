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
            echo 'Data Inserted';
        }else{
            echo 'Data Not Inserted';
        }
    }

        
        

?>
<br>

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

