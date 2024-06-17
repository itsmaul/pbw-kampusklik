<?php
    // Connect PHP dengan MySQL
    include_once("./connect.php");

    $id = $_GET["id"];
    $query = mysqli_query($database, "DELETE FROM staff WHERE id=$id");

    header ("location: staff.php");
?>