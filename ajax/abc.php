<?php


	//$data  = $_POST['search'];
	//$obj = json_decode($data);

	/*$data = "<table border=1>
				<tr>
					<td>ID</td>
					<td>Name</td>
					<td>Email</td>
				</tr>
				<tr>
					<td>1</td>
					<td>{$term}</td>
					<td>{$term}@aiub.edu</td>
				</tr>";*/

	$std = ['name'=> 'alamin', 'id'=>12, 'dept'=>'CS'];
	$json = json_encode($std);
	echo $json;
?>