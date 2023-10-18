<?php
    require_once "conn.php";
    $id = $_GET["id"];
    $query = "DELETE FROM post_crud WHERE id = '$id'";
    if (mysqli_query($conn, $query)) {
        header("location: index.php");
    } else {
         echo "Something went wrong. Please try again later.";
    }
?>