<?php
include("dbconnection.php");
$delito = $_POST['delito'];
$hora = $_POST['hora'];
$fecha = $_POST['fecha'];
Connect();
Query("INSERT");
?>