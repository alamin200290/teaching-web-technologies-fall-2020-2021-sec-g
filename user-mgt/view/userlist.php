<?php
	include('header.php');
	require_once('../db/db.php');

	$conn = getConnection();
	$sql = 'select * from users';
	$result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html>
<head>
	<title>User List</title>
</head>
<body>
	
	<a href="home.php">Back</a> |
	<a href="../php/logout.php">logout</a>

	<h3>User list</h3>
	<table border="1"> 
		<tr>
			<td>ID</td>
			<td>USERNAME</td>
			<td>PASSWORD</td>
			<td>EMAIL</td>
			<td>TYPE</td>
			<td>ACTION</td>
		</tr>

	<?php while($data = mysqli_fetch_assoc($result)){ ?>

			<tr>
				<td><?=$data['id']?></td>
				<td><?=$data['username']?></td>
				<td><?=$data['password']?></td>
				<td><?=$data['email']?></td>
				<td><?=$data['type']?></td>
				<td>
					<a href="edit.php?id=<?=$data['id']?>">EDIT</a> | 
					<a href="delete.php?id=<?=$data['id']?>">DELETE</a>
				</td>
			</tr>
	<?php } ?>

	</table>

</body>
</html>


