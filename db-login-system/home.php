<?php
	include('header.php');
	require_once('db/db.php');

	$conn = getConnection();
	$sql = 'select * from users';
	$result = mysqli_query($conn, $sql);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Home Page list</title>
</head>
<body>
	
	<h1>Welcome Home</h1>

	<a href="logout.php">logout</a>

	<h3>User list</h3>
	<table border="1"> 
		<tr>
			<td>ID</td>
			<td>USERNAME</td>
			<td>PASSWORD</td>
			<td>EMAIL</td>
			<td>TYPE</td>
		</tr>

	<?php while($data = mysqli_fetch_assoc($result)){ ?>

			<tr>
				<td><?=$data['id']?></td>
				<td><?=$data['username']?></td>
				<td><?=$data['password']?></td>
				<td><?=$data['email']?></td>
				<td><?=$data['type']?></td>
			</tr>
	<?php } ?>

	</table>

</body>
</html>


