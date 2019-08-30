<?php
require_once './database.php';
$error = $msg = "";
if (isset($_POST['iname'])) { //updating
    $iId = sanitizeString($_POST['iid']);
    $iName = sanitizeString($_POST['iname']);
    $iDescription = sanitizeString($_POST['idescription']);
    $iPrice = sanitizeString($_POST['iprice']);
    $iStatus = sanitizeString($_POST['istatus']);
    $iSize = sanitizeString($_POST['isize']);
    $catalogueId = sanitizeString($_POST['catalogueid']);
    $uId = $_SESSION['uid'];
    $query = "UPDATE Item SET iname = '$iname', idescription = '$idescription', iprice = '$iprice', istatus = '$istatus', isize = '$isize' WHERE iid = '$iid'";
    $result = queryMysql($query);
    if (!$result) {
        $error = "Couldn't update item $iName, please try again";
    } else {
        $msg = "Updated $iName successfully";
    }
}
//for loading the data to the form
if (isset($_POST['iid'])) {
    $iId = sanitizeString($_POST['iid']);
    //Load the current data to that batch
    $query = "SELECT iname, idescription, iprice, istatus, isize FROM Item WHERE iid = '$iid'";
    $result = queryMysql($query);
    $row = mysqli_fetch_array($result);
    if ($row) {
        $iname = $row[0];
        $idescription = $row[1];
        $iprice = $row[2];
        $istatus = $row[3];
        $isize = $row[4];
    }
}
?>
<br><br>
<form action="updateitem.php" method="POST">
    <fieldset>
        <legend>Update Item</legend>
        <div class="error"><?php echo $error; ?></div>
        <input type="hidden" value="<?php echo $iid; ?>" name="iid"/>
        Name: </br>
        <input type="text" id="iname" name="iname" required value="<?php echo $iname; ?>"/><br>
        Description: </br>
        <input type="text" id="idescription" name="idescription" required value="<?php echo $idescription; ?>"/><br>
        Price: </br>
        <input type="text"  name="iprice" required value="<?php echo $iprice; ?>"/><br>
        Status: </br>
        <input type="text"  name="istatus" required value="<?php echo $istatus; ?>"/><br>
        Size: </br>
        <input type="text"  name="isize" required value="<?php echo $isize; ?>"/><br><br>
        <input type="submit" value="Update"/>
        <div><?php echo $msg; ?></div>
    </fieldset>
</form>
</body>
</html>
