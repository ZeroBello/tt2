<?php 
    include("catalogue.php");
?>
<table class="tbl">
    <tr>
        <th> ID</th>
        <th> Name</th>
        <th> Options</th>
    </tr>
    <?php
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $Id = $row['id'];
        $cName = $row['cname'];
        echo "<tr>";
        echo "<td>$Id</td>";
        
        ?>        
<li><a href="index.php">Home Page</a></li>
        <td>
            <form class="frminline" action="deletecatalogue.php" method="post" onsubmit="return confirmDelete();">
                <input type="hidden" name="id" value="<?php echo $row['id'] ?>" />
                <input type="submit" value="Delete" />
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