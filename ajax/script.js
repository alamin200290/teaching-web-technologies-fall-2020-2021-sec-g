
function test(){
	
	var name = document.getElementById('name').value;
	var xhttp = new XMLHttpRequest();
	xhttp.open('GET', 'abc.php?myname='+name, true);
	xhttp.send();
	//document.getElementById('h').innerHTML = xhttp.responseText;
	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			//alert(this.responseText);
			document.getElementById('h').innerHTML = this.responseText;
		}
	}
}


function search(){	

	/*var formdata ={
		'name' : 'alamin',
		'dept' : 'CSE', 
		'id'   : 12
	};*/

	//var data = JSON.stringify(formdata);
	var term = document.getElementById('name').value;
	var xhttp = new XMLHttpRequest();
	xhttp.open('POST', 'abc.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			
			var obj = JSON.parse(this.responseText);	
			alert(obj.dept);
			//document.getElementById('search').innerHTML = this.responseText;
		}
	}
	//xhttp.send('search='+data);
	xhttp.send();

/*var abc={
	
	's1': {
			'name' : 'alamin',
			'dept' : 'CSE', 
			'id'   : 12
		},

	's2':{
			'name' : 'alamin',
			'dept' : 'CSE', 
			'id'   : 12
		}
	}
}*/