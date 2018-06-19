<?php
include "db.php"
$id = $_GET{'id'};
$m = mysqli_query("select * from employee where id = '$id' ");
$check = mysqli_fetch_array($m);
if(isset($_POST['done']))
{
$id=$_POST{"id"};

$fullname=$_POST{"fullname"};

$date=$_POST{"dateofjoining"};

$age=$_POST{"age"};


$email=$_POST{"email"};


$update = mysql_query("UPDATE `employee` SET `Full Name`='$fullname',`Date Of Joining`='$dateofjoining',`Age`='$age',`Email`='$email' WHERE id='$id'");
if(!$update)
{
	echo mysqli_error($connection);

}
else
{
	header("location:update.php")
}
}
?>
<form method="POST">
<input type="text" name="fullname" value =<?php echo $check['Full Name'];?> placeholder="Full Name">

<input type="text" name="dateofjoining" value =<?php echo $check['Date Of Joining'];?> placeholder="Date of Joining">

<input type="text" name="age" value =<?php echo $check['Age'];?> placeholder="Age">

<input type="text" name="email" value =<?php echo $check['Email'];?> placeholder="Email">

<input type="submit" name="done">

</form>

