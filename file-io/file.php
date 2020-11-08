<?php

/*	$myfile = fopen('test.txt', 'w');
	fwrite($myfile, 'this is file i/o test...');
	fclose($myfile);

	echo "done";*/

	$myfile = fopen('test.txt', 'r');
	//$data = fread($myfile, filesize('test.txt'));
	//$data = fgets($myfile);
	// /echo $data;

	while($data = fgets($myfile)){
		echo $data . "<br>";
	}

	fclose($myfile);

?>