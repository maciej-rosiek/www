function height_window(){
	if(window.innerHeight)
		return window.innerHeight;
	if(document.body.clientHeight)
		return document.body.clientHeight;
	return (null);
}

var isIE=0;
var isOtherBrowser=0;
function fokus() {
	if(navigator.appName.indexOf('Microsoft Internet Explorer')!=-1) {
		isIE=1;
		var height_div=document.getElementById("main").scrollHeight;
		height=height_window();
		var h = (height-height_div)/2;
		if (h < 0)
			h = 0;
		document.getElementById('main').style.marginTop=h+'px';
	}
	else {
		isOtherBrowser =1;
		var height_div= document.getElementById("main").scrollHeight;
		height=height_window();
		var h = (height-height_div)/2;
		if (h < 0)
			h = 0;
		document.getElementById('main').style.marginTop=h+'px';
		zmena_okna = setTimeout("fokus()", 1);
	}
}

window.onload = fokus;