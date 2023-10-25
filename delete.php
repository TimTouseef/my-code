<?php
require("../database_conn/config.php");
$id=$_GET['id'];
//delete image from folder
include("update_image.php");
//delete query
$delete="DELETE FROM crud_image WHERE u_id='$id' ";
$result=mysqli_query($conn,$delete);
// header("location:select.php");
echo "<script>
alert('image update or delete succssfully from folder');
window.location.href='select.php';
</script>";
?>