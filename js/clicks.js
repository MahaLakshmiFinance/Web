function sidemenu(x){
	for(var i=1;i<=9;i++){
		if(i!=x){
			document.getElementById("link"+i).setAttribute("class","")
			document.getElementById('content'+i).style="display:none";
		}
	}
	document.getElementById("link"+x).setAttribute("class","active")
	document.getElementById("content"+x).style = "";
	document.getElementById("subcontent"+x+''+1).style = "";
}

function nav(x){
	var list = [4,3,2,3,3,1,1,1,1]
	for(var i=1;i<=9;i++){
		for(var j=1;j<=list[i-1];j++){
			document.getElementById('subcontent'+i+''+j).style = "display:none"
		}
	}
	document.getElementById('subcontent'+x).style = ""
}
function verify(x){
	var list = [3]
	for(var i=1;i<=1;i++){
		for(var j=1;j<=list[i-1];j++){
			document.getElementById('unverified'+i+''+j).style = "display:none"
			document.getElementById('verified'+i+''+j).style = "display:none"
		}
	}
	document.getElementById('verified'+x).style =""
}