<h1>Test</h1>


<?php
		
	$name = "alamin";
	$id = 123;

/*	$array = array('1','alamin',23,3.5);
	$array = ['1','alamin', 23, 3.5];

	$array = array(
					'id' => '1',
					'name' => 'alamin', 
					'age'=> 23, 
					'cgpa'=> 3.5
				);

	$array = [
				'id' => '1',
				'name' => 'alamin', 
				'age'=> 23, 
				'cgpa'=> 3.5
			];*/

	/*$student = [ 
				's1'=>[
						'id'=>1, 
						'age'=>2
					], 
				's2'=>[
						'id'=>2, 
						'age'=>4
					], 
				's3'=>[
						'id'=>4, 
						'age'=>5
					], 
				's4'=>[
						'id'=>5, 
						'age'=>7
					] 
				];

	echo $student['s4']['age'];*/

	//print "hello php...";
	//print('test...');
	//echo "THIS"." IS"." PHP CODE";
	//echo $name.$id;

	//echo $array[1];
	//echo $array['age'];
	//echo "<h1>something...</h1>";

	
	$student = ['1','alamin', 23, 3.5];
	$students = [
					's1'=> ['id'=>12, 'name'=>'xyz'],
					's2'=> ['id'=>11, 'name'=>'pqr'],
					's3'=> ['id'=>10, 'name'=>'abc']
				];

	/*for ($i=0; $i < count($s1); $i++) { 
		echo $s1[$i]."<br/>";
	}

	foreach ($students as $s ) {
		echo $s['id']." ".$s['name']."<br>";	
	}*/

	//echo $students['s1']['name']

	/*if(12 === '12'){
		echo "true";
	}else{
		echo "false";
	}*/



$students = [
				's1'=> ['id'=>12, 'name'=>'xyz', 'cgpa'=>3.5],
				's2'=> ['id'=>11, 'name'=>'pqr', 'cgpa'=>3.2],
				's3'=> ['id'=>10, 'name'=>'abc', 'cgpa'=>3.6]
			];


$data = "<table border=1>
			<tr>
				<td>ID</td>
				<td>NAME</td>
				<td>CGPA</td>
			</tr>";

	foreach ($students as $s) {
		
		/*$data .="<tr>
				<td>".$s['id']."</td>
				<td>".$s['name']."</td>
				<td>".$s['cgpa']."</td>
			</tr>";*/

		$data .="<tr>
				<td>{$s['id']}</td>
				<td>{$s['name']}</td>
				<td>{$s['cgpa']}</td>
			</tr>";

		/*$data .= "<tr>
			<td>$s['id']</td>
			<td>$s['name']</td>
			<td>$s['cgpa']</td>
		</tr>";*/
	}

$data .= "</table>";
echo $data;

?>


