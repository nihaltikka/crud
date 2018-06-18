<?php
include "db.php"
?>
<table border="2">
	<tr>
	<th>ID</th>
	<th>Full Name</th>
	<th>Date of Joining</th>
	<th>Age</th>
	<th>Email</th>
	<th>Edit</th>
	<th>Delete</th>
    </tr>
 <?php
 $record = mysqli_query($connection,"SELECT * FROM  employee ");
 while($data = mysqli_fetch_array($record))
 {
 	?>
 	<tr>
 	<td><?php echo $data['ID'];?></td>
 	<td><?php echo $data['Full Name'];?></td>
 	<td><?php echo $data['Date Of Joining'];?></td>
 	<td><?php echo $data['Age'];?></td>
 	<td><?php echo $data['Email'];?></td>	
 	<td><a href="edit.php?id=<?php echo $data['id'];?>">edit</a></td>	
 	<td><a href="delete.php?id=<?php echo $data['id'];?>">delete</a>
 	</td>	
 	
 	 </tr>
 	 <?php
 	 }
 	 ?>
 	</table>
 	<a href="index.php">ADD USER</a>
