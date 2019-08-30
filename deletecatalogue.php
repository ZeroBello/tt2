<?php
session_start();
require_once './database.php';
if (isset($_POST['id'])) {
    $cId = sanitizeString($_POST['id']);
    $query = "DELETE FROM Catalogue WHERE id = '$id'";
    queryMysql($query);
    //header("Location: loadcatalogue.php");
    die("You've deleted the catalogue '$id' <a href='loadcatalogue.php'>click here</a> to continue.");
}
?>
<?php
    while ($row = mysqli_fetch_array($result)) {
        $cname = $row[1];
        echo "<tr>";
        echo "<td>$cname</td>";
      
        ?>
        <td>
            <form class="frminline" action="deletecatalogue.php" method="post" onsubmit="return confirmDelete();">
                <input type="hidden" name="cId" value="<?php echo $row[0] ?>" />
                <input type="submit" value="Delete" />
            </form>
                 </td>
        <?php
        echo "</tr>";
    }
    ?>
    
