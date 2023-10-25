<?php



require("config.php");



if(isset($_POST['insert'])){
    $name=$_POST['namet'];
    $file_name=$_FILES['file']['name'];
    $tmp_name=$_FILES['file']['tmp_name'];
     
    $insert="INSERT INTO crud_image(u_name,u_image)VALUES('$name','$file_name')";
    $result=mysqli_query($conn,$insert);
    //upload file in folder
    move_uploaded_file($tmp_name,"image".$file_name);
    header("index.php");
    



}
echo"<a href='select.php'>go to</a>";
mysqli_close($conn);
?>