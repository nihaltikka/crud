<?php
include "db.php"
$id = $_GET{'ID'};
$del = mysqli_query("DELETE FROM `employee` WHERE ID ='$id'");
header("location=update.php");
?>
