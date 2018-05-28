function sidemenu(x){
	for(var i=0;i<=9;i++){
		document.getElementById("link"+i).setAttribute("class","")
	}
	document.getElementById("link"+x).setAttribute("class","active")
	$('#content').load('php/content/content'+x+'/content'+x+'.php')
}
