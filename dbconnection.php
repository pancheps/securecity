<?php
	$host = "localhost";
	$usr = "root";
	$pwd = "root";
	$db = "secure_city";
	$link = NULL;
	
	function Connect()
	{
		global $host, $usr, $pwd, $db, $link;
		$link = mysql_connect($host, $usr, $pwd)
									or die("No se pudo conectar al servidor");
		mysqli_select_db($db)
									or die("No se pudo seleccionar la base de datos");
	}
	
	function Query($sql)
	{
		global $link;
		$resource = mysqli_query($link, $sql)
									or die("No se pudo realizar la consulta");
		$values = mysqli_fetch_assoc($resource);
		return $values;
	}
	
	function Close()
	{
		global $link;
		mysqli_close($link);
	}
?>