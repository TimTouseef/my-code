<?php
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD',"");
define('DB_NAME',"touseefcrud");
$conn=mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);
if ($conn===false){
    die("ERROR:COULD NOT CONNECT.".mysqli_connect_error());
}

?>
