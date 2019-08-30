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

