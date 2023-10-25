<?php
require("../database_conn/config.php");
$select="SELECT *FROM crud_image";
$result=mysqli_query($conn,$select)or die("could not display data");
echo"<table border='1' cellspacing='0' cellpadding='10'>
<tr bgcolor='orange'>
<th>U_ID</th>
<th>U_Name</th>
<th>U_Image</th>
<th>Edit</th>
<th>Delete</th>
</tr>";
while($row=mysqli_fetch_array($result)){
    echo"<tr>";
    echo"<td>".$row['u_id']."</td>";
    echo"<td>".$row['u_name']."</td>";
    //display image
    echo"<td><img src='../photo/".$row['u_image']."' alt='$row[u_name]' width='50'></td>";
    //for edit and delete data
    echo"<td><a href='update.php?id=$row[u_id]'/>Edit</a></td>";
    echo"<td><a href='delete.php?id=$row[u_id]'/>Delete</a></td>";
    echo"</tr>";
}
echo"</table>";
?>
<html>
    <head>
        <title>insert new data</title>
    </head>
    <body>
        <a href="../index.php">insert a new record</a>
    </body>
</html>