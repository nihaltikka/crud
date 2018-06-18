<?php
include "db.php";
if(isset($_POST['done']))
{
$id=$_POST{"id"};

$fullname=$_POST{"fullname"};

$date=$_POST{"dateofjoining"};

$age=$_POST{"age"};


$email=$_POST{"email"};

$insert = mysqli_query($connection,"INSERT INTO `employee`(`ID`, `Full Name`, `Date Of Joining`, `Age`, `Email`) VALUES ('$id','$fullname','$date','$age','$email')");
if(!$insert)
{
	echo mysqli_error($connection);

}
else
{
	echo"inserted";
}
}
?>
<form method="POST">
<input type="text" name="id" placeholder="ID">

<input type="text" name="fullname" placeholder="Full Name">

<input type="text" name="dateofjoining" placeholder="Date of Joining">

<input type="text" name="age" placeholder="Age">

<input type="text" name="email" placeholder="Email">

<input type="submit" name="done">

</form>
<a href="record.php">RECORDS</a>
