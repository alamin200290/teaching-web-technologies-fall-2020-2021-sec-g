"use strict"

let a =10;
var b = 20;
const c=40;

let student = ['alamin', 'cs', 'alamin@aiub.edu'];

//console.log('test');
//alert('test');
//document.write('this is JS example');


function action(){
	var obj = document.getElementById('d1');

	if(obj.innerHTML == ""){
		obj.innerHTML = "testing JS code...";
	}else{
		obj.innerHTML = "";
	}
}

function getName(){
	let name = document.getElementById('name').value;
	//alert(name);
	document.getElementById('head').innerHTML = name;
}
