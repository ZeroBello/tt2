 <?php
require_once './database.php';
$error = $msg = "";
if (isset($_POST['cname'])) { //updating
    $cId = sanitizeString($_POST['id']);
    $cName = sanitizeString($_POST['cname']);
    //
     
        $query = "UPDATE Catalogue SET cname = '$cname', WHERE id = '$id'";
        $result = queryMysql($query);
        if (!$result) {
            $error = "Couldn't update Catalogue $cname, please try again";
        } else {
            $msg = "Updated $cname successfully";
        }
    
}
//for loading the data to the form
if (isset($_POST['id'])) {
    $id = sanitizeString($_POST['id']);
    //Load the current data to that batch
    $query = "SELECT cName FROM Catalogue WHERE id = '$id'";
    $result = queryMysql($query);
    $row = mysqli_fetch_array($result);
    if ($row) {
        $cName = $row[0];
        $cDescription = $row[1];
    }
}
?>
<br><br>
<form action="updatecatalogue.php" method="POST">
    <fieldset>
        <legend>Update Catalogue</legend>
        <div class="error"><?php echo $error; ?></div>
        <input type="hidden" value="<?php echo $id; ?>" name="id"/>
         Name: </br>
        <input type="text" id="cname" name="cname" required value="<?php echo $cname; ?>"/><br>
        <input type="submit" value="Update"/>
        <div><?php echo $msg; ?></div>
    </fieldset>
</form>

</body>
</html>
