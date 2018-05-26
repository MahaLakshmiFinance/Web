function sidemenu(x){
	for(var i=0;i<=9;i++){
		document.getElementById("link"+i).setAttribute("class","")
	}
	document.getElementById("link"+x).setAttribute("class","active")
	$('#content').load('php/content/content'+x+'/content'+x+'.php')
}

// function nav(x){
// 	var list = [4,3,2,3,3,1,1,1,1]
// 	for(var i=0;i<=9;i++){
// 		for(var j=1;j<=list[i-1];j++){
// 			document.getElementById('subcontent'+i+''+j).style = "display:none"
// 		}
// 	}
// 	document.getElementById('subcontent'+x).style = ""
// }
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