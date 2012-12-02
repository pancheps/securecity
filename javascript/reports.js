// JavaScript Document

function RegisterReport() {
	var formu = document.getElementById("formulario");
	formu.removeAttribute("class");
	formu.style.top = "200px";
	formu.style.position = "absolute";
	formu.style.margin = "0 45%";
	formu.style.backgroundColor = "Blue";
	formu.style.color = "White";
}

function HideAndSend() {
	Hide();
	
}

function Hide() {
	document.getElementById("formulario").setAttribute("class", "hidden");
}

function UploadReport() {
	var xmlhttp;
	if (window.XMLHttpRequest) {
		xmlhttp=new XMLHttpRequest();
	}
	else {
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function() {
	  if (xmlhttp.readyState==4 && xmlhttp.status==200){
		alert(xmlhttp.responseText);
	  }
	}
	xmlhttp.open("POST","",true);
	xmlhttp.send("delito=" + document.getElementById("delito") + "&hora=" + document.getElementById("hora") + "&fecha=" + document.getElementById("fecha"));
}

function ShowStats() {
	document.getElementById("map_canvas").setAttribute("class", "hidden1");
	document.getElementById("stats").removeAttribute("class");
}

function ShowMap() {
	document.getElementById("stats").setAttribute("class", "hidden1");
	document.getElementById("map_canvas").setAttribute("class", "");
}

function SetGraph() {
	
}

