<?php

	//sleep(3);

	$term  = $_POST['search'];

	$data = "<table border=1>
				<tr>
					<td>ID</td>
					<td>Name</td>
					<td>Email</td>
				</tr>
				<tr>
					<td>1</td>
					<td>{$term}</td>
					<td>{$term}@aiub.edu</td>
				</tr>";
	echo $data;
?>