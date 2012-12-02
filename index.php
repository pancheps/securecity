<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Secure City</title>
<script type="text/javascript" src="javascript/reports.js"></script>
<script type="text/javascript" src="javascript/forms.js"></script>
<script type="text/javascript"
    src="https://maps.google.com/maps/api/js?sensor=true&language=es">
</script>
<?php
if(isset($verinfo))
	show_d($verinfo);
?>

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript" >

var initialLocation;
var lapaz = new google.maps.LatLng(-16.50,-68.15);
var browserSupportFlag =  new Boolean();
var map;

function initialize() {
   if (typeof window.innerHeight != 'undefined')
   {
	   document.getElementById("map_canvas").style.height = parseInt(window.innerHeight) - 115 + "px";
   }
   else
   {
	   document.getElementById("map_canvas").style.height = "500px";
   }
  var myOptions = {
    zoom: 14,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
  
  // Try W3C Geolocation (Preferred)
  if(navigator.geolocation) {
    browserSupportFlag = true;
    navigator.geolocation.getCurrentPosition(function(position) {
      initialLocation = new google.maps.LatLng(position.coords.latitude,position.coords.longitude);
      map.setCenter(initialLocation);
    }, function() {
      handleNoGeolocation(browserSupportFlag);
    });
  }
  // Browser doesn't support Geolocation
  else {
    browserSupportFlag = false;
    handleNoGeolocation(browserSupportFlag);
  }
  
  function handleNoGeolocation(errorFlag) {
    if (errorFlag == true) {
      alert("Geolocation service failed");
      initialLocation = lapaz;
    } else {
      alert("Your browser doesn't support geolocation. We've placed you in La Paz - Bolivia.");
      initialLocation = lapaz;
    }
    map.setCenter(initialLocation);
  }
  RedAlert(new google.maps.LatLng(-16.50,-68.15));
  RedAlert(new google.maps.LatLng(-16.510,-68.015));
  RedAlert(new google.maps.LatLng(-16.520,-68.125));
  RedAlert(new google.maps.LatLng(-16.530,-68.135));
  RedAlert(new google.maps.LatLng(-16.540,-68.135));
  YellowAlert(new google.maps.LatLng(-16.495,-68.135));
  YellowAlert(new google.maps.LatLng(-16.5321,-68.135));
  YellowAlert(new google.maps.LatLng(-16.532,-68.135));
  GreenAlert(new google.maps.LatLng(-16.530,-68.135));
  GreenAlert(new google.maps.LatLng(-16.542,-68.135));
  GreenAlert(new google.maps.LatLng(-16.541,-68.135));
}

var RedImage = new google.maps.MarkerImage(
        "points/Circle_Red.png"
        , new google.maps.Size(16,16)
        , new google.maps.Point(0,0));
		
var YellowImage = new google.maps.MarkerImage(
        "points/Circle_Yellow.png"
        , new google.maps.Size(16,16)
        , new google.maps.Point(0,0));
		
var GreenImage = new google.maps.MarkerImage(
        "points/Circle_Green.png"
        , new google.maps.Size(16,16)
        , new google.maps.Point(0,0));

function RedAlert(positionOnMap)
{
  var marker = new google.maps.Marker({
      position: positionOnMap, 
      map: map, 
      title:"Muy Peligroso, Antisociales podrian estar todavia por el lugar",
	  icon: RedImage 
  });    
}
function YellowAlert(positionOnMap)
{
  var marker = new google.maps.Marker({
      position: positionOnMap, 
      map: map, 
      title:"Peligroso eventualmente.",
	  icon: YellowImage 
  });    
}

function GreenAlert(positionOnMap)
{
  var marker = new google.maps.Marker({
      position: positionOnMap, 
      map: map, 
      title:"Se detectaron pocos incidentes y aislados.",
	  icon: GreenImage 
  });    
}

</script>
<link href="securecity.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body onload="initialize()">
    <div class="content">
        <div id="header">
            <div id="header-content">
                <p><h1><span class="bigger">S</span>ecure <span class="bigger">C</span>ity<span class="header-right">Ayúdanos a mejorar llenando esta encuesta</span></h1></p>
            </div>
        </div>
        <div id="wrapper">
            <div id="menu-wrapper">
                <div id="menu" class="container">
                    <ul>        
                        <li class="rightitem" ><a href="index.php">Cambiar Ubicación</a></li>
                        <li class="rightitem" onclick="ShowStats();"><a href="#">Estadísticas</a></li>
                        <li class="rightitem"><a href="#">Información</a></li>
                        <li class="end" onclick="RegisterReport();"><a href="#">Denuncias</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
<?php
include("draw_chart.php");
?>

        
        <div id="map_canvas"></div>
    <div id="formulario" class="hidden">
        <div id="innerformulario">
        <form action="#">
        <div>
        <label>Delito: </label>
        <select name="delito" id="delito">
        <option value="0">Robo de vehículo</option>
        <option value="1">Hurto</option>
        <option value="2">Robo de casa</option>
        <option value="3">Asalto con arma de fuego</option>
        <option value="4">Asalto con arma blanca</option>
        <option value="5">Secuestro</option>
        <option value="6">Asesinato</option>
        <option value="7">Violaciones</option>
        <option value="8">Ebriedad en público</option>
        <option value="9">Venta de estupefacientes</option>
        </select>
        </div>
        <div>
        <label>Hora</label> <input type="text" name="hora" id="hora" />
        </div>
        <div>
        <label>Fecha</label> <input type="text" name="fecha" id="fecha" />
        </div>
        <div>
        <input type="button" value="Enviar" onclick="HideAndSend();" />
        <input type="button" value="Cancelar" onclick="Hide();" />
        </div>
        </form>
        </div>
    </div>
    
    <div id="encuesta" class="hidden">
    <div><a href="index.php?verinfo=1">Relación con la víctima</a></div>
    <div><a href="index.php?verinfo=2">Probabilidad de ser víctima fuera de casa</a></div>
    <div><a href="index.php?verinfo=3">Percepción del incremento de la inseguridad</a></div>
    <div><a href="index.php?verinfo=4">Hora de ocurrencia de hechos delictivos</a></div>
    <div><a href="index.php?verinfo=5">Uso de armas en hechos delictivos</a></div>


    <div class="hidden1" id="stat">
    <div id="chart_div" style="width: 100%; height: 100%;"></div>
    </div>

    </div>
</body>
</html>
