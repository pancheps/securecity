<<<<<<< HEAD
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Secure City</title>
    <script type="text/javascript"
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBg1R0vkKCXEJZJG_am_fvtLhW3JxR7DUM&sensor=false">
    </script>
    <script type="text/javascript">
      function initialize() {
    
	   if (typeof window.innerHeight != 'undefined')
	   {
		   document.getElementById("map_canvas").style.height = window.innerHeight;
		   alert(window.innerHeight);
	   }
        var mapOptions = {
          center: new google.maps.LatLng(-17.397, -66.158),
          zoom: 14	,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById("map_canvas"),
            mapOptions);
      }
    </script>

<link href="securecity.css" rel="stylesheet" type="text/css" media="screen" />
</head>

<body onload="initialize()">
    <div class="content">
        <div id="header">
            <div id="header-content">
                <p><h1><span class="bigger">S</span>ecure <span class="bigger">C</span>ity</h1></
            </div>
        </div>
        <div id="wrapper">
            <div id="menu-wrapper">
                <div id="menu" class="container">
                    <ul>
                        <li class="current_page_item"><a href="Services.html">Mejorando SC </a></li>
        
                        <li><a href="#">Denuncias</a></li>
                        <li><a href="#">Georeferencias</a></li>
                        <li><a href="#">Estatdisticas</a></li>
                        <li><a href="#">Encuestas</a></li>
                        <li><a href="#">Contactos</a></li>
                    </ul>
                </div>
            </div>
        </div>
        
        
        
        
        <div id="map_canvas"></div>
        
    </div>
</body>
</html>
=======
<?php
 Hello World

?>
>>>>>>> be7ed5797349d2d049b5664ec464dfc00676bca1
