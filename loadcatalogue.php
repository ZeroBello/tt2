<?php
require_once './database.php';
$query = "SELECT id, cname from Catalogue";
if(isset($_POST['keyword'])){
    $keyword = sanitizeString($_POST['keyword']);
    $query = $query . " WHERE cname LIKE '%$keyword%'";
}
$result = queryMysql($query);
$error = $msg = "";
if (!$result){
    $error = "Couldn't load data, please try again.";
}
?>
<br><br>
 
<div>
    <form action="loadcatalogue.php" method="post">
        Search catalogue:
        <input type="search" name="keyword"/>
        <input type="submit" value="Go"/>
    </form>
</div>
<br>
<table class="tbl">
    <tr>
        <th> Name</th>
        <th>Options</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_array($result)) {
        $cName = $row[1];
        $cDescription = $row[2];
        echo "<tr>";
        echo "<td>$cname</td>";
      
        ?>
        <td>
            <form class="frminline" action="deletecatalogue.php" method="post" onsubmit="return confirmDelete();">
                <input type="hidden" name="cId" value="<?php echo $row[0] ?>" />
                <input type="submit" value="Delete" />
            </form>
            <form class="frminline" action="updatecatalogue.php" method="post">
                <input type="hidden" name="cId" value="<?php echo $row[0] ?>" />
                <input type="submit" value="Update" />
            </form>
        </td>
        <?php
        echo "</tr>";
    }
    ?>
    <script>
        function confirmDelete() {
            var r = confirm("Are you sure you would like to delete ?");
            if (r) {
                return true;
            } else {
                return false;
            }
        }
    </script>
</table>
</body>
</html>
