<?php
require("../database_conn/config.php");
$id=$_GET['id'];
//select data from database
$select="SELECT *FROM crud_image WHERE u_id='$id'";
$result=mysqli_query($conn,$select)or die("could not select");
while($row=mysqli_fetch_array($result)){
    $name=$row['u_name'];
    $file_name=$row['u_image'];
}
?>
<!--update data from database-->
<?php 
if(isset($_POST['update'])){
    $id=$_POST['u_id'];
    $name=$_POST['namet'];
    $file_name=$_FILES['file']['name'];
    $tmp_name=$_FILES['file']['tmp_name'];
     
    // update image from folder
    include_once("update_image.php");
    //for image upload
    move_uploaded_file($tmp_name,"../photo/".$file_name);
    //update query
    $update="UPDATE crud_image SET u_name='$name', u_image='$file_name' WHERE u_id='$id'";
    $result=mysqli_query($conn,$update)or die("data could not update");
    echo"<script>
    alert('datqa update succssfully');
    window.location.href='select.php';
    </script>";
}
?>
 
<html>
    <head>
        <title>udpate data</title>
    </head>
    <body>
        <form action="" method="POST" enctype="multipart/form-data">
            <table border="1">
                <tr>
                    <th>Name</th>
                    <th>Image</th>
                    <th>Upload</th>
                </tr>
                <tr>
                    <td><input type="text" name="namet" value="<?php echo $name; ?>"></td><br />
                    <!--//for image -->
                    <td><img src="../photo/<?php echo $file_name;?>" width="50"></td><br />
                    <td><input type="file" name="file" value="<?php echo $file_name;?>"></td><br />
                </tr>
            </table>
            <input type="hidden" name="u_id" value="<?php echo $_GET['id'];?>">
            <input type="submit" name="update" value="update"/>
        </form>
    </body>
</html>