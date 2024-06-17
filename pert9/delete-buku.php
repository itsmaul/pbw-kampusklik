<?php
    // Connect PHP dengan MySQL
    include_once("./connect.php");

    $id = $_GET["id"];
    $query = mysqli_query($database, "DELETE FROM buku WHERE id=$id");

    header ("location: buku.php");
?>