<?php
include_once 'db_conn.php';
$result = mysqli_query($conn,"SELECT * FROM library");
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Delete library data</title>
</head>
<body>
<table>
	<tr>
	<td>library Id</td>
	<td>First Name</td>
	<td>Last Name</td>
	<td>City</td>
	<td>Email id</td>
	<td>Action</td>
	</tr>
	<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
	?>
	<tr class="<?php if(isset($classname)) echo $classname;?>">
	<td><?php echo $row["Id"]; ?></td>
	<td><?php echo $row["FirstName"]; ?></td>
	<td><?php echo $row["LastName"]; ?></td>
	<td><?php echo $row["Contact_No"]; ?></td>
	<td><?php echo $row["Email_ID"]; ?></td>
	<td><a href="DeleteProcess.php?Id=<?php echo $row["Id"]; ?>">Delete</a></td>
	</tr>
	<?php
	$i++;
	}
	?>
</table>
</body>
</html>