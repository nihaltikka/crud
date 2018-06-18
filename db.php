<?php
$dbhost="localhost";
$username="root";
$password="";
$connection=mysqli_connect("$dbhost","$username","$password");
$db=mysqli_select_db($connection,'my_db');
if(!$db)
{
echo"not connected";
}
else
{
echo"connected";
}
?>