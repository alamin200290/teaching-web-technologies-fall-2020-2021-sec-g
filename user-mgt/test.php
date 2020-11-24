<?php

	$abc= 12;
	$xyz= 34;

	function sum (){

		//global $abc;
		//global $xyz;

		return $xyz + $abc;
		//return $GLOBALS['abc'] + $GLOBALS['xyz'];
	}

	//echo sum();

	print_r($_SERVER);
?>