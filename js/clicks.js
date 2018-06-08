function sidemenu(x){
	for(var i=0;i<=10;i++){
		if(document.getElementById("link"+i)!=null)
			document.getElementById("link"+i).setAttribute("class","")
	}
	if(document.getElementById("link"+x)){
		document.getElementById("link"+x).setAttribute("class","active")
		$('#content').load('php/content/content'+x+'/content'+x+'.php')
	}
	else{
		setTimeout(function(){sidemenu(x)},500);
	}
}
