<?php
$server_name='localhost';
$user_name='root';
$password='';
$db_name='uploads';
 
$conn=mysqli_connect($server_name,$user_name,$password,$db_name)or die("could not connect");

if( $conn);
{
    echo "done";
}


?>