
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
	
	var term = document.getElementById('name').value;
	var xhttp = new XMLHttpRequest();
	xhttp.open('POST', 'abc.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.onreadystatechange = function(){
		if(this.readyState == 4 && this.status == 200){
			//alert(this.responseText);
			document.getElementById('search').innerHTML = this.responseText;
		}
	}
	xhttp.send('search='+term);

}